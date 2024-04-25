<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoPerfil extends Model
{
    protected $table ='Fotoperfils';
    protected $fillable=[
        'user_id',
        'img'
    ];
    use HasFactory;
}
