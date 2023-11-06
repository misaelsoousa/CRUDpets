<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Imagens;
class ImagensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Imagens::create([
            'idPet' => '1',
            'imagem' => '/img_pets/bela.jpg',
            ]);
            Imagens::create([
                'idPet' => '2',
                'imagem' => '/img_pets/bili.jpg',
            ]);
    
            Imagens::create([
                'idPet' => '3',
                'imagem' => '/img_pets/bird.jpg',
            ]);
            
            Imagens::create([
                'idPet' => '4',
                'imagem' => '/img_pets/bruce.jpg',
            ]);
    
            Imagens::create([
                'idPet' => '5',
                'imagem' => '/img_pets/gaia.jpg',
            ]);
    
            Imagens::create([
                'idPet' => '6',
                'imagem' => '/img_pets/luke.jpg',
            ]);
    
           
    }
}
