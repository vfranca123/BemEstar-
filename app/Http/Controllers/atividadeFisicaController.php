<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AtividadeFisica;


class atividadeFisicaController extends Controller
{
    public function index(){
        return view('AtividadeFisica.AtividadeFisica');
    }

    public function store(User $user, Request $request){
        $validated = $request->validate([
            'nome' => 'required',
            'inicio' => 'required', 
            'Fim' => 'required', 
            'descricao'=>'required'
        ]);

        if ($validated['Fim'] && $validated['inicio'] && $validated['nome'] && $validated['descricao']){
            AtividadeFisica::create([
                'user_id' => $user->id,
                'nome' => $validated['nome'],
                'inicio' =>  $validated['inicio'],
                'fim'=>$validated['Fim'],
                'descricao'=> $validated['descricao']
                
            ]);
            return redirect()->route('atividadeFisica.show', $user)->with('flash', 'Atividade fisica registrada registrada');
        }
        else{return redirect()->route('atividadeFisica.index')->with('flashError', 'Todos os campos devem estar preenchidos');}
    }

    public function show(User $user){
        $AtividadeFisica=$user->atividade_fisicas;
        
        return view('AtividadeFisica.AtividadeFisicaShow', compact('user', 'AtividadeFisica'));
    }
}
