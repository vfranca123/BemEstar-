<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refeicao extends Model
{
    protected $fillable=[
        'user_id',
        'imag',
        'conteudo',
        'data'
    ];
    use HasFactory;

    
}
