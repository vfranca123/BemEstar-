<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\sono;
use Illuminate\Http\Request;
use App\Models\User;

class SonoController extends Controller
{
    public function index(){
        return view('sono.sono');
    }

    public function store(User $user, Request $request){
        
        
        $validated = $request->validate([
            
            'inicio' => 'required', 
            'fim' => 'required', 
            'avaliacao'=>'required'
        ]);
        
        if ($validated['fim'] && $validated['inicio'] && $validated['avaliacao'] ){
            sono::create([
                'user_id' => $user->id,
                'inicio' => $validated['inicio'],
                'Fim' =>  $validated['fim'],
                'avaliacao'=>$validated['avaliacao']    
            ]);
            return redirect()->route('sono.show', $user)->with('flash', 'Sono registrado ');
        }
        else{return redirect()->route('sono.index')->with('flashError', 'Todos os campos devem estar preenchidos');}
    

        
    }

    public function show(User $user){
        $sonos=$user->sonos;
        
        return view('sono.sonoShow', compact('user', 'sonos'));
    }

}
