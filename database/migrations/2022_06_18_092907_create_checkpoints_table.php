<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckpointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkpoints', function (Blueprint $table) {
            $table->string('routename');
            $table->integer('pointnumber')->nullable();
            $table->float('latitude');
            $table->float('Longitude');
            $table->string('activity_title');
            $table->string('activity_header')->nullable();
            $table->string('activity_awnser')->nullable();
            $table->string('activity_false1')->nullable();
            $table->string('activity_false2')->nullable();
            $table->string('activity_false3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkpoints');
    }
}
