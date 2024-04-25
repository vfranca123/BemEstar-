<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sono extends Model
{
    protected $table ='Sonos';
    protected $fillable=[
        'user_id',
        'inicio',
        'fim',
        'avaliacao'
    ];
    use HasFactory;
}
