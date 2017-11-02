<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContributeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributeurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->unsignedBigInteger('fond_disponible');
            $table->bigInteger('visibilite');
            $table->unsignedInteger('user_id')->index();
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
        Schema::dropIfExists('contributeurs');
    }
}
