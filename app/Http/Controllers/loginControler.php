<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginControler extends Controller
{
    public function index(){
        return view('login',['controle'=>0]);
    }

    public function authenticate(){
         
        $validet = request()->validate([
        
            'email'=>'required|email',
            'password'=>'required'
        
        ]);
       

        if(auth()->attempt($validet)){
            
            request()->session()->regenerate();
            return redirect()->route('HomePage',['id'=>auth()->id])->with('flash','login completo');
        }
        
        return redirect()->route('login.index')->with( 'flash','email ou senha incorreto');
    }
}
