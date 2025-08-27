<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrimeiroController; 

Router::get("\exercicio2",[PrimeiroController::Class,"exercicio2"]);
Router::post("\exercicio2",[PrimeiroController::Class,"FromExercicio"]);

