<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginControler;
use App\Http\Controllers\registerController;
use App\Http\Controllers\RefeicaoController;
use App\Http\Controllers\atividadeFisicaController;
use App\Http\Controllers\SonoController;

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
Route::get('/sonoInfo', [DashboardController::class, 'ModeradorDeSono'])->name('sonoInfo');
Route::get('/AtividadeFisicaInfo', [DashboardController::class, 'ModeradorDeAtividadesFísicas'])->name('AtividadeFisicaInfo');
Route::get('/humorInfo', [DashboardController::class, 'ModeradordeHumor'])->name('HumorInfo');

Route::get('/login', [loginControler ::class, 'index'])->name('login.index');
Route::post('/login/authenticate', [loginControler ::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [loginControler ::class, 'logout'])->name('logout');

Route::get('/register', [registerController ::class, 'index'])->name('register.index');
Route::post('/register/store', [registerController ::class, 'store'])->name('register.store');

Route::get('/refeicao', [RefeicaoController::class, 'index'])->name('refeicao.index');
Route::post('/user/{user}/refeicao', [ RefeicaoController::class, 'store'])->name('user.refeicao.store');
Route::get('/refeicaos/{user}', [RefeicaoController::class, 'show'])->name('refeicao.show');

Route::get('/atividadeFisica', [atividadeFisicaController::class, 'index'])->name('atividadeFisica.index');
Route::post('/user/{user}/atividadeFisica',[atividadeFisicaController::class, 'store'])->name('user.atividadeFisica.store');
Route::get('/atividadeFisica/{user}', [atividadeFisicaController::class, 'show'])->name('atividadeFisica.show');


Route::get('/sono', [SonoController::class, 'index'])->name('sono.index');
Route::post('/user/{user}/sono',[SonoController::class, 'store'])->name('user.sono.store');
Route::get('/sono/{user}', [SonoController::class, 'show'])->name('sono.show');


Route::get('/user/{user}', [registerController::class, 'editIndex'])->name('userEdit.index');
Route::get('/user/{user}/show', [registerController::class, 'userShowIndex'])->name('userShow.index');
Route::put('/user/{user}/edit', [registerController::class, 'update'])->name('user.update');