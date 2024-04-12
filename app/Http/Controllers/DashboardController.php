<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use User;

class DashboardController extends Controller
{
    public function index(){
     
        return view('Dashboard',['controle'=>1]);
    }
    public function HomePage(){
        return view('HomePage',['controle'=>2]);
    }
}
