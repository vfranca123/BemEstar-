<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\refeicao;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class RefeicaoController extends Controller
{
    public function index(){
        return view('op.refeicao');
    }

    public function show(User $user){
        $refeicaos=$user->refeicaos;
        
        return view('op.refeicaoShow', compact('user', 'refeicaos'));
    }

    // Importe o modelo Refeicao

    public function store(User $user, Request $request) {
    $validated = $request->validate([
        'text' => 'required',
        'image' => 'image', 
        
    ]);

    if ($request->hasFile('image')) {
       
        $imagePass = request()->file('image')->store('refeicoes','public'); 
        $valideted['image']=  $imagePass ;
        
        Storage::disk('public')->delete($user->image ?? '');
        Refeicao::create([
            'user_id' => $user->id,
            'conteudo' => $validated['text'],
            'imag' =>  $valideted['image']// Salva apenas o caminho relativo da imagem
        ]);

        return redirect()->route('refeicao.show', $user)->with('flash', 'Refeição registrada');
    } else {
        return redirect()->route('refeicao.index')->with('flashError', 'Todos os campos devem estar preenchidos');
    }
}

    
}
