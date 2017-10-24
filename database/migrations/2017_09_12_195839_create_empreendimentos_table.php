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
            $table->string('cidade');
            $table->string('estado');
            $table->string('ramoAtiv');
            $table->string('razaoSocial');
            $table->string('EmpImage')->default(('images/empresa.png')); 
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
