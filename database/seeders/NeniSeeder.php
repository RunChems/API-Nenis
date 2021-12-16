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
        Neni::create([
            'name' => 'Markitos Lomito',
            'image' => 'markitos.png',
            'main_activity' => 'Ser hermoso, si se vuelve gei run run lo aparta',
            'neni_day' => '2020-10-10',
            'chems_type_id' => 3
        ]);
        Neni::create([
            'name' => 'Oskr',
            'image' => 'markitos.png',
            'main_activity' => 'Amar a su ruffle',
            'neni_day' => '2020-10-10',
            'chems_type_id' => 4
        ]);
        Neni::create([
            'name' => 'Brandon lomito',
            'image' => 'concopia.png',
            'main_activity' => 'CC significa con copia',
            'neni_day' => '2020-10-10',
            'chems_type_id' => 5
        ]);
        Neni::create([
            'name' => 'Wendy lomita',
            'image' => 'concopia.png',
            'main_activity' => 'CC significa con copia',
            'neni_day' => '2021-12-10',
            'chems_type_id' => 6
        ]);
    }
}
