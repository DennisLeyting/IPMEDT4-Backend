<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGebruikerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gebruiker', function (Blueprint $table) {
            $table->id('id');
            $table->string('voornaam');
            $table->string('achternaam');
            $table->string('email');
            $table->string('woonplaats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gebruiker');
    }
}
