<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class ActiviteitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activiteit')->insert([
            'soort_activiteit' => 'puzzel',
            'beschrijving' => 'Wat is zwart -> wit -> zwart -> wit -> zwart',
            'antwoord' => 'Een Pinguin die van de berg afrolt',]);

        DB::table('activiteit')->insert([
            'soort_activiteit' => 'opdracht',
            'beschrijving' => 'Doe 5 push-ups',]);
    }
}
