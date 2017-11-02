<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('adresse');
            $table->string('ville');
            $table->string('pays');
            $table->string('nationalite');
            $table->string('grade');
            $table->string('specialite');
            $table->timestamps();
        });

        Schema::create('formateur_formation', function(Blueprint $table){

            $table->increments('id');
            $table->unsignedInteger('formateur_id')->index();
            $table->unsignedInteger('formation_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formateurs');
    }
}
