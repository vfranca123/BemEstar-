<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use User;

class DashboardController extends Controller
{
    public function index(){
     
        return view('Dashboard');
    }
    public function HomePage(){
        return view('HomePage');
    }

    public function ModeradorDeSono(){
        return view('shared.info',['controle'=>1]);
    }

    public function ModeradorDeAtividadesFísicas(){
        return view('shared.info',['controle'=>2]);
    }

    public function ModeradordeHumor(){
        return view('shared.info',['controle'=>3]);
    }

}
