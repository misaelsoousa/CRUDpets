<?php

namespace Database\Seeders;

use App\Models\Solicitante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolicitantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Solicitante::create([
            'solicitante' => 'Misael',
            'idPet' => '1',
            'cpf' => '59832923432',
            'email' => 'misasoousa@gmail.com',
            'celular' => '999999999',
            'data_nas' => '29/08/2004',

            ]);
    }
}
