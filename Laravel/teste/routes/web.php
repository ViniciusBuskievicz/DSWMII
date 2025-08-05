<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\SaudacaoController;

Route::get('/', function () {
    return view('welcome');
});


//rota simples
Route::get('/ola',function (){
    return 'Olá, mundo do lavarel';
});

//rota com parâmetros
Route::get('/usuario/{id}',function($id){
    return 'Detalhes do Usuário ID: '.$id;
});

//rota que chama um controller
Route::get('/saudacao-controller', [SaudacaoController::class, 'exibirMsg']);

//rota que retorna uma view
Route::get('/minha-view', function(){
    $nome = 'Nicolas';
    return  view('minha-primeira-view', ['nomeUsuario' => $nome]);
});