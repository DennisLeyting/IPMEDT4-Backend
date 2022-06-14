<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class GebruikerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gebruiker')->insert([
            'voornaam' => 'Jaap',
            'achternaam' => 'Kanbier',
            'email' => 'kanbier.j@hsleiden.nl',
            'woonplaats' => 'Den Haag']);

        DB::table('gebruiker')->insert([
            'voornaam' => 'Kimberly',
            'achternaam' => 'Szul',
            'email' => 's1121190@student.hsleiden.nl',
            'woonplaats' => 'Nieuw-Vennep']);
    }
}
