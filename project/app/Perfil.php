<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = [
        'imagem', 'rua', 'numero', 'bairro', 'cidade', 'estado', 'cep',
        'profissao', 'nomeC', 'numeroC', 'dataValiC', 'digitoC', 'user_id'
    ];
}
