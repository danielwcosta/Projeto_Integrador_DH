<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_evento extends Model
{
    protected $table = 'usuario_evento';
    protected $primaryKey = 'id_usuario_evento';

   public function getEvento_Fk (){
       return $this->evento_fk;

   }

   public function getUsuario (){
       return $this->id_usuario_evento;
   }
}
