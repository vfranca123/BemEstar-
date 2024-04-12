<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class registerController extends Controller
{
    public function index(){
        return view('register',['controle'=>1]);
    }

    public function store(){
        
        $validated = request()->all();
        
    
        $user = User::create([
            'name' => $validated['nome'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'data_coluna' => $validated['date']
        ]); 

       
        return redirect()->route('index')->with('flash', 'Conta criada com sucesso ');
       
    }
}
