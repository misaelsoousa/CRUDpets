<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;
class SeederPets extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Pet::create([
            'nome' => 'Fofucha',
            'especie' => 'cachorro',
            'raca' => 'vira-lata',
            'idade' => '10',
            'peso' => '9',
            'porte' => 'pequeno',
            'local' => 'Itanhaém',
            'sobre' => 'Muito fofa',
            'sexo' => 'Feminino',
            'status' => true,

            ]);
            Pet::create([
                'nome' => 'Luna',
                'especie' => 'cachorro',
                'raca' => 'Poodle',
                'idade' => '5',
                'peso' => '7',
                'porte' => 'pequeno',
                'local' => 'Porto Alegre',
                'sobre' => 'Poodle brincalhona e adorável',
                'sexo' => 'Feminino',
                'status' => true,
            ]);
    
            Pet::create([
                'nome' => 'Max',
                'especie' => 'cachorro',
                'raca' => 'Bulldog',
                'idade' => '4',
                'peso' => '23',
                'porte' => 'médio',
                'local' => 'Fortaleza',
                'sobre' => 'Bulldog carinhoso e leal',
                'sexo' => 'Masculino',
                'status' => true,
            ]);
    
            // Continue adicionando os outros 10 conjuntos de dados como nos exemplos acima, ajustando os valores para refletir as características específicas de cada animal.
            
            Pet::create([
                'nome' => 'Mia',
                'especie' => 'gato',
                'raca' => 'Siamese',
                'idade' => '2',
                'peso' => '5',
                'porte' => 'pequeno',
                'local' => 'Salvador',
                'sobre' => 'Gata siamesa brincalhona',
                'sexo' => 'Feminino',
                'status' => true,
            ]);
    
            Pet::create([
                'nome' => 'Rocky',
                'especie' => 'cachorro',
                'raca' => 'Dálmata',
                'idade' => '1',
                'peso' => '20',
                'porte' => 'médio',
                'local' => 'Brasília',
                'sobre' => 'Dálmata energético e amigável',
                'sexo' => 'Masculino',
                'status' => true,
            ]);
    
            Pet::create([
                'nome' => 'Coco',
                'especie' => 'cachorro',
                'raca' => 'Chihuahua',
                'idade' => '3',
                'peso' => '2',
                'porte' => 'pequeno',
                'local' => 'Recife',
                'sobre' => 'Chihuahua pequeno e brincalhão',
                'sexo' => 'Masculino',
                'status' => true,
            ]);
    
            Pet::create([
                'nome' => 'Misty',
                'especie' => 'gato',
                'raca' => 'Maine Coon',
                'idade' => '6',
                'peso' => '15',
                'porte' => 'grande',
                'local' => 'Manaus',
                'sobre' => 'Maine Coon majestoso e peludo',
                'sexo' => 'Feminino',
                'status' => true,
            ]);
    }
}
