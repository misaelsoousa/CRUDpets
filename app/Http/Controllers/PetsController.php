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

    public function mostrar(Request $request, $id)
    {
        $imagens = Imagens::where('id', $id)->get();
        
        $imagemPrincipal = $imagens->shift();

        $pets = Pet::where('id', $id)->first();
        return view('integra', ['pets' => $pets, 'imagens' => $imagens, 'imagemPrincipal' => $imagemPrincipal]);
    }



    
    
}

