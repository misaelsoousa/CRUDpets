<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use App\Models\Solicitante;
use App\Models\Imagens;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Maatwebsite\Excel\Excel;
class PetsAdminController extends Controller
{
    public function index()
    {
        return view('cadastrar');
    }
    public function create()
    {
        $pets = Pet::all();
        return view('painel', ['pets' => $pets]);
    }
    public function store(Request $request)
{
    // Validação
    $request->validate([
        'nome' => [
            'required',
            function ($attribute, $value, $fail) use ($request) {
                $exists = Pet::where('nome', $request->input('nome'))
                    ->where('especie', $request->input('especie'))
                    ->where('idade', $request->input('idade'))
                    ->exists();

                if ($exists) {
                    $fail('Já existe um pet com a mesma combinação de nome, espécie e idade.');
                }
            },
        ],
        'especie' => 'required',
        'idade' => 'required',
    ]);

    // Upload da imagem
    $file = $request->file('imagem');
    $fileName = $request->input('nome') . '.' . $file->getClientOriginalExtension();
    $file->storeAs('img_pets', $fileName, 'petsImage');

    // Criação do Pet
    $pet = Pet::create($request->all());

    // Criação do registro na model Imagens e associação ao Pet criado
    Imagens::create([ 'idPet' => $pet->id, 'imagem' => '/img_pets/'.$fileName, ]);

    return redirect()->route('cadastrar')->with('success', 'Pet cadastrado com sucesso.');
}
    public function painelPets()
    {
        $pets = Pet::paginate(10);
        return view('painel', ['pets' => $pets]);
    }

    public function edit($id)
    {
        $pets = Pet::where('id',$id)->first();
        if(!empty($pets)){

            return view('editar', ['pets'=> $pets]);
        }
        else{
            return redirect()->route('painel');
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'especie' => $request->especie,
            'raca' => $request->raca,
            'idade' => $request->idade,
            'peso' => $request->peso,
            'porte' => $request->porte,
            'local' => $request->local,
            'sobre' => $request->sobre,
            'sexo' => $request->sexo,
            'status' => $request->status,
        ];
        Pet::where('id',$id)->update($data);
        return redirect()->route('painel');
    }

    public function destroy($id)
    {
        Pet::where('id',$id)->delete();
        return redirect()->route('painel');
    }

    public function filtrar(Request $request)
    {
        $query = Pet::query();

        $campos = ['nome', 'especie', 'raca', 'idade', 'peso', 'porte', 'local', 'sobre', 'sexo', 'status'];

        foreach ($campos as $campo) {
            if ($request->filled($campo)) {
                
                $query->where($campo, '=',  $request->input($campo));
            }
        }

        $pets = $query->get();

        return view('painel',  ['pets' => $pets]);
    }
    public function recuperarSenha()
    {
        return view('recuperarsenha');
    }

    public function gerar_token($tamanho)
    {
        
        $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $stringAleatoria = '';
        
        for ($i = 0; $i < $tamanho; $i++) {
            $stringAleatoria .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        
        return $stringAleatoria;
    }

    public function recuperarSenhaGerarToken(Request $request)
    {
        $token = $this->gerar_token(8);

        $user = User::where('email',$request->input("email"))->first();
        $user->remember_token = $token;
        
        $user->update();
        return view('recuperarsenhatoken',  ['token' => $token, 'idUser' => $user->id]);
    }
    public function recuperarSenhaToken(Request $request){
        $token = $request->input("token");
        $user = User::where("id", $request->input("id"))->first();
        if ($user->remember_token == $token) {
            return redirect()->route('recuperar-novasenha', ['id' => $user->id]);
        } else {
            return redirect()->route('recuperarsenhatoken')->with('error', 'Token inválido');
        }

    }
    public function criarNovaSenha(Request $request){
        $id = $request->input("id");
        return view('recuperarnovasenha', ['id' => $id]);
    }
    public function alterarSenha(Request $request){
       $user = User::where('id', $request->input("id"))->first();
       $user->password = bcrypt($request->input("password"));
       $user->update();
       return redirect()->route('login.form')->with('success', 'Senha alterada com sucesso');
    }
}