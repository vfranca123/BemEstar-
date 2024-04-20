<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginControler;
use App\Http\Controllers\registerController;
use App\Http\Controllers\RefeicaoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/homePage', [DashboardController::class, 'HomePage'])->name('HomePage');



Route::get('/login', [loginControler ::class, 'index'])->name('login.index');
Route::post('/login', [loginControler ::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [loginControler ::class, 'logout'])->name('logout');

Route::get('/register', [registerController ::class, 'index'])->name('register.index');
Route::post('/register', [registerController ::class, 'store'])->name('register.store');

Route::get('/refeicao', [RefeicaoController::class, 'index'])->name('refeicao.index');
Route::post('/user/{user}/refeicao', [ RefeicaoController::class, 'store'])->name('user.refeicao.store');
Route::get('/refeicaos/{user}', [RefeicaoController::class, 'show'])->name('refeicao.show');



//Route::get('/register',[AuthController::class, 'register'])->name('register');