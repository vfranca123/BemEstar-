<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ftPerfil extends Model
{
    protected $fillable=[
        'user_id',
        'img'
    ];
    use HasFactory;
}
