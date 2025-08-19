<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::get('/login', [App\Http\Controllers\Login::class, 'login']);

Route::get('/home', [App\Http\Controllers\Home::class, 'home']);

Route::get('/consulta', [App\Http\Controllers\ConsultadePlaca::class, 'consultadeplaca']);

Route::get('/orçamento', [App\Http\Controllers\Orcamento::class, 'orcamento']);

Route::get('/estoque', [App\Http\Controllers\Estoque::class, 'estoque']);

Route::get('/gestao', [App\Http\Controllers\Gestao::class, 'gestao']);

Route::get('/cadastro', [App\Http\Controllers\cadastrocliente::class, 'cadastrocliente']);

// Rota para a página inicial (Dashboard)
Route::get('/home', function () {return view('home');});

// Rota para a página de Orçamentos
Route::get('/orcamentos', function () {return view('orcamento');});

// Rota para a página de Estoque
Route::get('/estoque', function () {return view('estoque');});

// Rota para a página de Clientes
// Nota: Esta rota está apontando para 'cadastrocliente.blade.php'
Route::get('/clientes', function () {return view('cadastrocliente');});

// Rota para a página de Gestão/Financeiro
Route::get('/gestao', function () {return view('gestao');});
