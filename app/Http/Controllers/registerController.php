<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use GuzzleHttp\Psr7\Request as Psr7Request;
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


    public function userShowIndex(User $user){

        return view('user.userShow',compact('user'));
    }

    public function editIndex(User $user){

        return view('user.user-editing',compact('user'));
    }
    public function update(User $user,Request $request){
        
        
        $validated = $request->all();
        dump($validated);
        
        /*
        if ($request->hasFile('image')) {
       
            $imagePass = request()->file('image')->store('FotosPerfil','public'); 
            $valideted['image']=  $imagePass ;
        }
        */


        //$user->update($valideted);
    }
}
