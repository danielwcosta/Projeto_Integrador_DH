<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    

    


}

