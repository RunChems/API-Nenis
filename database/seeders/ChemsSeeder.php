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
    }
}
