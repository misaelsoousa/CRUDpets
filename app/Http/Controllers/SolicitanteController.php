<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use App\Models\Solicitante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SolicitanteController extends Controller
{
    public function index(Request $request)
    {
        $nomePet = $request->input('nome');
        $id = $request->input('id');
        return view('formulario');
    }
    public function create()
    {
        $pet = Solicitante::all();
        return view('formulario');
    }
    public function store(Request $request)
    {
        Solicitante::create($request->all());
        return redirect()->route('home');
    }
    public function filtrarSolicitantes(Request $request)
    {
        $query = Solicitante::query();

        $campos = ['solicitante', 'idPet', 'created_at'];

        foreach ($campos as $campo) {
            if ($request->filled($campo)) {
                
                $query->where($campo, '=',  $request->input($campo));
            }
        }
        $solicitantes = $query->get();
        $pets = Pet::all();
        return view('solicitacoes',  ['solicitantes' => $solicitantes, 'pets' => $pets]);
    }

    public function painelSolicitacoes()
    {
        $solicitantes = Solicitante::all();
        $pets = Pet::all();
        return view('solicitacoes', ['solicitantes' => $solicitantes, 'pets' => $pets]);
    }
}
