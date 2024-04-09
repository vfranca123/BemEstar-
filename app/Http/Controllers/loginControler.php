<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginControler extends Controller
{
    public function index(){
        return view('login',['controle'=>0]);
    }
}
