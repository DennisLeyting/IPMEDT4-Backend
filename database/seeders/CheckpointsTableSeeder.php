<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CheckpointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('checkpoints')->insert([
            'routename' => 'test',
            'pointnumber' => '1',
            'latitude' => '51.44444444444',
            'longitude' => '4.2222222222222222',
            'activity_title' => 'commentaar',
            'activity_header' => 'een test'
        ]);
    }
}