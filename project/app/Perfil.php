<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = [
        'rua', 'numero', 'bairro', 'cidade', 'estado', 'cep',
        'profissao', 'nomeC', 'numeroC', 'dataValiC', 'digitoC', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
