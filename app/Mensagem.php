<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Mensagem extends Model
{
    protected $table = 'mensagem';
    protected $primaryKey = 'id_mensagem';

    public function getMensagem(){
        return $this->Mensagem;
    }

    public function getData_Hora(){
        return $this->data_hora;
    }

    // relacionamento do filme com o genero
// this é a classe do filme
public function UserLogado(){
    //1a parametro é a classe que eu quero me relacionar
    //2a. parametro qual é o campo que se relaciona -> la na tabela de genero
    //3a. parametro é qual o nome do campo da tabela aqui
    return $this->hasOne(User::class,'id','user_id');
  }
  // final a relação está pronta mas não define qual campo puxar






}
