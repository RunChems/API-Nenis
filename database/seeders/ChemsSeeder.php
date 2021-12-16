<?php

namespace Database\Seeders;

use App\Models\ChemsType;
use Illuminate\Database\Seeder;

class ChemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChemsType::create([
            'name' => 'Run Lomito',
            'description' => 'Es un run muy lomito',
        ]);
        ChemsType::create([
            'name' => 'God Lomito',
            'description' => 'Chems es mi pastor nada me faltara',
        ]);
        ChemsType::create([
            'name' => 'Markito Lomito Bomnito',
            'description' => 'EL chems mas beio, si lo ves en persona te vuelves gei',
        ]);
        ChemsType::create([
            'name' => 'Ruffle lomito',
            'description' => 'Sin su ruffle vale queso',
        ]);
        ChemsType::create([
            'name' => 'Chems con copia lomito',
            'description' => 'Chems con copia lomito',
        ]);
        ChemsType::create([
            'name' => 'Mama chems',
            'description' => 'Mama de las nenis, amada por todo chems',
        ]);
        ChemsType::create([
            'name' => 'Chems Mofles',
            'description' => 'Mama de las nenis, amada por todo chems',
        ]);
    }
}
