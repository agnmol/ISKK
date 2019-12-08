<?php

use Illuminate\Database\Seeder;

class authorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autoriai = [
            ['vardas_pavarde' => 'Vardas1 Pavarde1'],
            ['vardas_pavarde' => 'Vardas2 Pavarde2'],
        ];

        foreach ($autoriai as $autorius){
            App\Authors::insert([$autorius]);
        }
    }
}
