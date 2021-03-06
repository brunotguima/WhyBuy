<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpreendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empreendimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nomeFantasia');
            $table->string('cnpj');
            $table->string('inscEst');
            $table->string('cep');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('estado');
            $table->string('razaoSocial');
            $table->integer('ramoAtividade_id')->unsigned();
            $table->foreign('ramoAtividade_id')->references('id')->on('ramoatividade');
            $table->string('EmpImage')->default('empresa.png'); 
            $table->string('slug');
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
        Schema::dropIfExists('Empreendimentos');
    }
}
