<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiviteitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activiteit', function (Blueprint $table) {
            $table->id('activiteitID');
            $table->string('soort_activiteit');
            $table->string('beschrijving');
            $table->string('antwoord')->nullable()->default(NULL);
            $table->foreign('soort_activiteit')->references("naam")->on("soorten_activiteiten");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activiteit', function (Blueprint $table) {
            $table->dropForeign('activiteit_soort_activiteit_foreign');
        });

        Schema::dropIfExists('activiteit');
    }
}
