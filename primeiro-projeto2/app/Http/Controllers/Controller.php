<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

Class PrimeiroController extends Controller
{

public function exercicio2(){
    return view("exercicio2");
}

public function FromExercicio(Resquest $request){

    $valor1 = $request -->valor1;
    $valor2 = $request -->valor2;
    $soma = $valor1 + $valor2;
    return "Soma: ".$soma;
    


}

}
?>