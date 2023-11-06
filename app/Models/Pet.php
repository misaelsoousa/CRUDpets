<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'nome',
    'especie',
    'raca',
    'idade',
    'peso',
    'porte',
    'local',
    'sobre',
    'sexo',
    'status',
    ];

    public function getRules($id = null)
{
    $rules = self::$rules;

    if ($id) {
        // Exclua o registro atual da validação única.
        $rules['nome'] = 'unique:pets,nome,' . $id;
        $rules['especie'] = 'unique:pets,especie,' . $id;
        $rules['idade'] = 'unique:pets,idade,' . $id;
    }

    return $rules;
}

}
