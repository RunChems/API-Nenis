<?php

namespace Database\Seeders;

use App\Models\Neni;
use Illuminate\Database\Seeder;

class NeniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Neni::create([
            'name' => 'Run',
            'image' => 'run.png',
            'main_activity' => 'Amar a chems lomito',
            'neni_day' => '2020-10-10',
            'chems_type_id' => 1
        ]);
        Neni::create([
            'name' => 'Chems Lomito',
            'image' => 'lomito.png',
            'main_activity' => 'Llevar a las nenis al lomimpo',
            'neni_day' => '2020-10-10',
            'chems_type_id' => 2
        ]);
    }
}
