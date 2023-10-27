<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        \App\Models\produit::factory()->create([
            'nom'=>'produit6',
          'desc'=>'desc6',
          'photo'=>'camera.jpeg',
          'prix'=>199.99
        ]);
    }
}
