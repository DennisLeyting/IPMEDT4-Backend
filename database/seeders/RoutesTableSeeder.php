<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
            'routename' => 'Centrum',
            'regio' => 'Hoofddorp'
        ]);
    }
}
