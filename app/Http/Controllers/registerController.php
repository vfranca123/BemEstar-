<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index(){
        return view('register',['controle'=>1]);
    }

    public function store(){
        
    }
}
