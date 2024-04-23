<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ftPerfil;
use Illuminate\Support\Facades\Storage;
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

    public function update(User $user, Request $request)
{
        $validated = $request->validate([
            'name' => 'required',
            'senha' => 'required'
        ]);

        // Verificar se uma imagem foi enviada no request
        if ($request->hasFile('imag')) {
            // Armazenar a nova imagem
            $imagePath = request()->file('imag')->store('FotosPerfil', 'public');

            // Verificar se o usuário tem uma imagem associada
            if ($user->ftPerfil) {
                // Deletar a imagem anterior e o registro correspondente
                Storage::disk('public')->delete($user->ftPerfil->img);
                $user->ftPerfil->delete();
            }

            // Criar um novo registro de perfil de imagem
            ftPerfil::create([
                'user_id' => $user->id,
                'img' => $imagePath
            ]);
        }

        // Atualizar os outros campos do usuário
        $user->update($validated);

        return redirect()->route('userShow.index', $user)->with('flash', 'Editado com sucesso');
    }

 }
    

