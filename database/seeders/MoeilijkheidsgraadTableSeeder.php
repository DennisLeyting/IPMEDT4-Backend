<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class MoeilijkheidsgraadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('moeilijkheidsgraad')->insert([
            'niveau' => '1',
            'beschrijving' => 'Om naar het volgende punt te komen krijg je een map te zien met de route uitgetekend. Je volgt dan gewoon de blauwe lijn op de map',]);

        DB::table('moeilijkheidsgraad')->insert([
            'niveau' => '2',
            'beschrijving' => 'Om naar het volgende punt te komen krijg je een map te zien met de het volgende checkpoint. Jij als loper moet dan zelf uitzoeken welke kant dat op is',]);
        
        DB::table('moeilijkheidsgraad')->insert([
            'niveau' => '3',
            'beschrijving' => 'Om naar het volgende punt te komen krijg je een kompas te zien met de benodige instructie. Bijvoorbeeld 20 meter 30 graden Noord. Jij als loper moet dan uitzoeken welke kant dat op is',]);
    }
}
