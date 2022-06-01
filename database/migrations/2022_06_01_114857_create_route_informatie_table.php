<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteInformatieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_informatie', function (Blueprint $table) {
            $table->string('routenummer');
            $table->string('checkpointnummer');
            $table->unsignedBigInteger('activiteitID')->nullable();
            $table->string('lang + lati'); //coordinaten
            $table->string('eindpunt'); //Ja of nee
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('route_informatie');
    }
}
