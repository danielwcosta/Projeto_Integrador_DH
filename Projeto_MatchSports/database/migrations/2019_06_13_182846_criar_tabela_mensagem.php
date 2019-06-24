<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaMensagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagem', function (Blueprint $table) {
            $table->bigIncrements('id_mensagem');
            $table->longText('description');
            $table->dateTime('data_hora')->now();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->unsignedBigInteger('evento_fk')->unsigned();
            $table->foreign('evento_fk')->references('id_evento')->on('evento');
            
            
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
        Schema::dropIfExists('mensagem');
    }
}
