<?php

use Illuminate\Database\Seeder;

class groupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grupes = [
            ['pavadinimas' => 'Pavadinimas 1'],
            ['pavadinimas' => 'Pavadinimas 2'],
        ];

        foreach ($grupes as $grupe){
            App\Groups::insert([$grupe]);
        }
    }
}
