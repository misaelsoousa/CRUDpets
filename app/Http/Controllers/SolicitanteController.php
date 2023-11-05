<?php

namespace App\Http\Controllers;
use App\Models\Solicitante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SolicitanteController extends Controller
{
    public function index(Request $request)
    {
        $nomePet = $request->input('nome');
        $idPet = $request->input('id');
        return view('formulario');
    }
    public function create()
    {
        $pet = Solicitante::all();
        return view('formulario');
    }
    public function store(Request $request,)
    {
        Solicitante::create($request->all());
        return redirect()->route('home');
    }
}
