<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidades extends Model
{
    protected $table = 'modalidades';
    protected $primaryKey = 'id_modalidade';
    protected $fillable = [
        'nome','logotipo','slug'
    ];

    public function getNome(){
        return $this->nome;
    }

    public function getLogo(){
        return $this->logotipo;
    }

    public function getSlug(){
        return $this->slug;
    }

    public function evento() {
        return $this->hasMany(Evento::Class, 'modalidade_fk', 'id_modalidade');
    }

}
