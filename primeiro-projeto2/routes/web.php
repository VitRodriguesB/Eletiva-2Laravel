<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeiraController;
use App\http\Controllers\ClienteController;

Route::resource('clientes', ClienteController::class);
//Listar Clientes - GET / clientes -- Route::get('\clientes',[CienteController::class, 'index'])
// Abrir formulario para inserir registro - GET /cliente/creates/creat -- 
// Salvar dados - POST /clientes -- metodo store
// Mostrar dados do registro - GET /clientes/{id_cliente} -- método show
// Abrir formulario para editar registro - GET /cliente/{id_cliente}/edit -- método
// Salvar alterações - PUT /clientes/{id_cliente}







Route::get('/teste', [PrimeiraController::class, "teste"]);

Route::get('/exemplo', [PrimeiraController::class, "abrirForm"]);
Route::post('/exemplo_resposta', [PrimeiraController::class, "resposta"]);

Route::get("/exercicio2", [PrimeiraController::class, "exercicio2"]);
Route::post("/resposta_exercicio2", [PrimeiraController::class, "respExercicio2"]);

Route::get("\clientes",function() {return view ("cliente.index");});

