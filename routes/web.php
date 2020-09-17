<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::prefix('cadastra-empregado')->group(function () {
//Rota de Cadastro
Route::post('/envia-cadastro', 'Cadastro\cadastroController@cadastraEmpregado');
//Rota de listagem
Route::get('/lista-cadastro', 'Cadastro\cadastroController@listaEmpregado');
//Rota de Edição
Route::post('/editar-cadastro/{id}', 'Cadastro\cadastroController@editaEmpregado');
//Rota de Exclusão
Route::post('/excluir-cadastro/{id}', 'Cadastro\cadastroController@excluiEmpregado');
});