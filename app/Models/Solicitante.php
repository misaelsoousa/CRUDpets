<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    use HasFactory;

    protected $fillable = [
        'idPet',
        'solicitante',
        'animal',
        'cpf',
        'email',
        'celular',
        'data_nas',
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'idPet', 'id');
    }
}
