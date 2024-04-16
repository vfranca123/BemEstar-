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
            return redirect()->route('HomePage')->with('flash','login completo');
        }
        
        return redirect()->route('login.index')->with( 'flash','email ou senha incorreto');
    }

    public function logout(){
        request()->session()->invalidate();
        auth()->logout(); // pega os dados do cara logado e e faz um logOut
        request()->session()->invalidate(); // invalida os dados anteriores apra segurança
        request()->session()->regenerate(); // limpa a cache
    
    return redirect()->route('index',['controle'=>1])->with('flash','logout completo');
    }
}
