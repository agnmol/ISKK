<?php

use Illuminate\Database\Seeder;

class booksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('knygos')->insert([
            'pavadinimas' => Str::random(50),
            'aprasymas' => Text::random(100),
            'data' => Date::random(),
            'puslapiai' => Integer::random(),

        ]);
    }
}
