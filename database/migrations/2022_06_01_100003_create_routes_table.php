<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id('routenummer');
            $table->unsignedBigInteger('creatorID');
            $table->string('stad');
            $table->string('beginpunt'); //lang + lati?
            // $table->integer('radius');
            $table->string('moeilijkheidsniveau');

            $table->foreign("creatorID")->references('id')->on("gebruiker");
            $table->foreign('moeilijkheidsniveau')->references('niveau')->on("moeilijkheidsgraad");
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('routes', function (Blueprint $table) {
            $table->dropForeign('routes_creatorID_foreign');
        });

        Schema::table('routes', function (Blueprint $table) {
            $table->dropForeign('routes_moeilijkheidsniveau_foreign');
        });

        Schema::dropIfExists('routes');
    }
}
