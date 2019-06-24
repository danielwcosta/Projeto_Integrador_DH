<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->bigIncrements('id_evento');
            $table->string('nome');
            $table->text('descricao');
            $table->string('regiao');
            $table->string('local');
            $table->string('cidade_uf');
            $table->date('data');
            $table->string('hora');
           
            $table->unsignedBigInteger('modalidade_fk')->unsigned(); 
            $table->foreign('modalidade_fk')->references('id_modalidade')->on('modalidades'); //tem q ficar logo abaixo da criar a coluna
           
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
           
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
        Schema::dropIfExists('evento');
    }
}
