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

// Commit Teste
// Commit Teste
