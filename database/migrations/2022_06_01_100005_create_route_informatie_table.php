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
            $table->id();
            $table->unsignedBigInteger('routenummer');
            $table->string('checkpointnummer');
            $table->string('lang + lati'); //coordinaten
            $table->unsignedBigInteger('activiteitID')->nullable();
            $table->string('eindpunt')->default('nee'); //Ja of nee
            
            $table->foreign("routenummer")->references("routenummer")->on("routes");
            $table->foreign("activiteitID")->references("activiteitID")->on("activiteit");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('route_informatie', function (Blueprint $table) {
            $table->dropForeign('route_informatie_routenummer_foreign');
        });

        Schema::table('route_informatie', function (Blueprint $table) {
            $table->dropForeign('route_informatie_activiteitID_foreign');
        });

        Schema::dropIfExists('route_informatie');
    }
}
