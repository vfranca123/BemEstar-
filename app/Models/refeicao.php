<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
    protected $table = 'Refeicaos';
    // nome do objeto deve começar com letra maiuscula 
    protected $fillable=[
        'user_id',
        'img',
        'conteudo',
        'data'
    ];
    use HasFactory;

    
}
