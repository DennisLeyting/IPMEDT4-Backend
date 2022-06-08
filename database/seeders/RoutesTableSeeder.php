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
            'routenummer' => '1',
            'creatorID' => '1',
            'stad' => 'Hoofddorp',
            'Beginpunt' => 'Dirk Centrum',
            'moeilijkheidsniveau' => '1'
        ]);
    }
}
