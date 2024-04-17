<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\refeicao;
use App\Models\User;

use Illuminate\Http\Request;

class RefeicaoController extends Controller
{
    public function index(){
        return view('op.refeicao');
    }
    public function store(User $user){
        
        $validated = request()->all();
      

       $refeicao = refeicao::create([
            'user_id'=>$user->id,
            'conteudo' => $validated['text'],
            'imag'=>$validated['image'],
            'data'=>$validated['data']
        
        ]);
        return redirect()->route('refeicao.index')->with('flash','refeição registrada');
         
        
    }
}
