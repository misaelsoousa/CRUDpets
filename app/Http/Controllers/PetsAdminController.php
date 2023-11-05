<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use App\Models\Solicitante;
use App\Models\Imagens;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

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
        $file = $request->file('imagem');
        $fileName = $request->input('nome') . '.' . $file->getClientOriginalExtension();
        $file->storeAs('img_pets', $fileName, 'petsImage');
    
        $pet = Pet::create($request->all());
        // Crie o registro na model Imagens e associe-o ao Pet criado
        Imagens::create([ 'idPet' => $pet->id, 'imagem' => '/img_pets/'.$fileName, ]);
    
        return redirect()->route('cadastrar');
    }
    public function painelPets()
    {
        $pets = Pet::all();
        return view('painel', ['pets' => $pets]);
    }

    public function painelSolicitacoes()
    {
        $solicitantes = Solicitante::with('pet')->get();
        return view('solicitacoes', compact('solicitantes'));
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
            $query->where($campo, 'LIKE', '%' . $request->input($campo) . '%');
        }
    }
        

        $registros = $query->get();

        $pets = Pet::all();

        return view('painel',  compact('registros', 'pets'));
    }
}
