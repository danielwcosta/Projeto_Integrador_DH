<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionarFotoEnderecoNascimentoSexoNaTabelaUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('photo',1000)->default('http://downloadicons.net/sites/default/files/Users-Icon-983960.png');
            $table->string('endereco',1000)->nullable();
            $table->string('cidade',100)->nullable();
            $table->string('estado',100)->nullable();
            $table->string('cep')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('sexo',100)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('photo');
            $table->dropColumn('endereco');
            $table->dropColumn('cidade');
            $table->dropColumn('estado');
            $table->dropColumn('cep');
            $table->dropColumn('data_nascimento');
            $table->dropColumn('sexo');

        });
    }
}
