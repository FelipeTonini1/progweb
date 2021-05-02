<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicial',[ClienteController::class,'telaInicial']);
Route::post('/final',[ClienteController::class,'telaFinal']);



Route::get('/cliente/novo',[ClienteController::class, 'novo'])->name('cliente_novo');

Route::post('/cliente/inserir',[ClienteController::class, 'inserir'])->name('cliente_inserir');

Route::post('/cliente/alterar/{id}',[ClienteController::class,'alterar'])->name('cliente_alterar');

Route::get('/cliente/editar/{id}',[ClienteController::class,'editar'])->name('cliente_editar');

Route::get('/cliente/excluir/{id}',[ClienteController::class,'excluir'])->name('cliente_excluir');

Route::get('/cliente/lista',[ClienteController::class, 'tela_principal'])->name('cliente_lista');