<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpreendimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Empreendimento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeEstab');
            $table->string('cnpj');
            $table->string('inscEst');
            $table->string('cep');
            $table->string('cidade');
            $table->string('estado');
            $table->string('ramoAtiv');
            $table->string('nomeFant');
             $table->string('image'); 
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
        Schema::dropIfExists('Empreendimento');
    }
}
