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
            $table->string('pointnumber');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('activity_title');
            $table->string('activity_header');
            $table->string('activity_awnser');
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
