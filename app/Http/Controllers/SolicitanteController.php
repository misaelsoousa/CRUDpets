<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Solicitante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class SolicitanteController extends Controller
{
    public function index(Request $request)
    {
        $pets = Pet::all();
        return view('formulario', ['pets' => $pets]);
    }
    public function create()
    {
        return view('formulario');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'animal' => 'required',
            'cpf' => 'required|cpf'
        ]);

        dd($request);

        Solicitante::create($request->all());
        return redirect()->route('home');
    }
    public function filtrarSolicitantes(Request $request)
    {
        $query = Solicitante::query();

        $campos = ['solicitante', 'idPet', 'created_at'];

        foreach ($campos as $campo) {
            if ($request->filled($campo)) {

                $query->where($campo, '=', $request->input($campo));
            }
        }
        $solicitantes = $query->get();
        $pets = Pet::all();
        return view('solicitacoes', ['solicitantes' => $solicitantes, 'pets' => $pets]);
    }

    public function painelSolicitacoes()
    {
        $solicitantes = Solicitante::paginate(10);
        $pets = Pet::all();
        return view('solicitacoes', ['solicitantes' => $solicitantes, 'pets' => $pets]);
    }

    public function export()
    {
        $solicitacoes = Solicitante::all();
        $pets = Pet::all();

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=lista_solicitacoes.csv');

        $handle = fopen('php://output', 'w');


        fputcsv($handle, ["Data de Envio", "Solicitante", "Nome do Animal"]);
        

        foreach ($solicitacoes as $solicitante) {
            $pet = $pets->where('id', $solicitante->idPet)->first();
            $data = [
                $solicitante->created_at,
                $solicitante->solicitante,
                $pet ? $pet->nome : "Nenhum pet encontrado",
            ];
            fputcsv($handle, $data);
        }        

        fclose($handle);
    }

    public function buscarSolicitacao($id)
    {
        $solicitacao = Solicitante::where('id', $id)->first();

        return $solicitacao;
    }
}
