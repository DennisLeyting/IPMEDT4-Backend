<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class SoortenActiviteitenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soorten_activiteiten')->insert([
            'naam' => 'puzzel',
            'beschrijving' => 'Dit is een activiteit waar je een raadseltje oplost op je telefoon.',]);

        DB::table('soorten_activiteiten')->insert([
            'naam' => 'opdracht',
            'beschrijving' => 'Dit is een activiteit waar je een fysieke opdracht doet, bijvoorbeeld een handstand.',]);

        DB::table('soorten_activiteiten')->insert([
            'naam' => 'comment',
            'beschrijving' => 'Dit is een activiteit waar je een commentaar kan plaatsen. Dit is vooral nuttig in bijvoorbeeld een educatieve omgeving.',]);

        DB::table('soorten_activiteiten')->insert([
            'naam' => 'foto',
            'beschrijving' => 'Dit is een activiteit waar je een foto moet maken van het object waar naar gevraagd wordt op je telefoon.',]);
    }
}
