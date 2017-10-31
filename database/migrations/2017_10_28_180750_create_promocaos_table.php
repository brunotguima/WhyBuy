<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocaos', function (Blueprint $table) {
            $table->integer('empreendimentos_id')->unsigned();
            $table->foreign('empreendimentos_id')->references('id')->on('empreendimentos');
            $table->increments('id');
            $table->string('nomeProd');
            $table->string('marcaProd');
            $table->string('valorProd');
            $table->string('categoria');
            $table->string('codProd');
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
        Schema::dropIfExists('promocaos');
    }
}
