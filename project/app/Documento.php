<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [
        'name', 'type', 'description', 'name_file', 'user_id'
    ];
}
