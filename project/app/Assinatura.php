<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model
{
    protected $fillable = [
        'solicitacao_id' ,'user_destino', 'documento_id', 'created_at'
    ];
}
