<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $fillable = [
        'assinado', 'user_id', 'user_destino', 'documento_id'
    ];
}
