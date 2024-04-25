<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtividadeFisica extends Model
{

    protected $table = 'AtividadesFisica';
    
    protected $fillable=[
        'user_id',
        'nome',
        'inicio',
        'fim',
        'descricao'
    ];
    use HasFactory;
}
