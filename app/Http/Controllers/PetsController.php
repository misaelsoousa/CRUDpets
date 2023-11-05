<?php

namespace App\Http\Controllers;
use App\Models\Imagens;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function RetornaAdoção()
    {
        $pets = Pet::all();
        return view('integra', ['pets'=>$pets]);
    }

    public function RetornaPets()
    {
        $imagens = Imagens::all();
        $pets = Pet::where('status', '1')
        ->orderBy('created_at','desc')
        ->paginate(8);
        return view('queroadotar', ['pets' => $pets, 'imagens' => $imagens]);
    }

    public function mostrar(Request $request)
    {
        $codigo = $request->input('id'); 
        $imagens = Imagens::where('idPet', $codigo)->get();
        
        $imagemPrincipal = $imagens->shift();

        $pets = Pet::where('id', $codigo)->first();
        return view('integra', ['pets' => $pets, 'imagens' => $imagens, 'imagemPrincipal' => $imagemPrincipal]);
    }

public function filtrarPet(Request $request)
    {
    $pets = Pet::all();
    $filtros = $request->all();

    $query = Pet::query();

    foreach ($filtros as $campo => $valor) {
        if (!empty($valor)) {
            $query->where($campo, 'like', '%' . $valor . '%');
        }
    }

    $animais = $query->get();

    return view('integra', ['pets' => $pets, 'animais' => $animais]);
    }

    
    
}

