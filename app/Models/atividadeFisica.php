<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atividadeFisica extends Model
{

    protected $fillable=[
        'user_id',
        'nome',
        'inicio',
        'fim',
        'descricao'
    ];
    use HasFactory;
}
