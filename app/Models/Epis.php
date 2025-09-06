<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Epis extends Model
{
    protected $fillable = [
        'nome',
        'preco',
        'tipo',
        'utilidade',
        'validade', 
    ];
}
