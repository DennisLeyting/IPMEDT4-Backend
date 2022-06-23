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
            'routename' => 'Centrum',
            'pointnumber' => '1',
            'latitude' => '52.30265321164089',
            'longitude' => '4.693479537963868',
            'activity_title' => 'comment',
            'activity_header' => 'Hoofddorp is niet echt bijzonder tbh.',
            'activity_awnser' => 'null'
        ]);
    }
}