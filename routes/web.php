<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
   return view('welcome');
  
});


Route::any('/custom', function() {
    //


    $msj = 'Mensaje desde el Servidor ';
    $saludo = "Hola Mundo";

    $data =['msj2' => $msj,'saludo' => $saludo, 'edad'=> 15];

    //Le mandamos la variable MSJ

    //$msj es la variable creada Aqui
    //msj2 Seria la variable que tendriamos en la vista Custom
    return view('custom', $data);

});


