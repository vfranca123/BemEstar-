<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sono extends Model
{
    protected $fillable=[
        'user_id',
        'inicio',
        'Fim',
        'avaliacao'
    ];
    use HasFactory;
}
