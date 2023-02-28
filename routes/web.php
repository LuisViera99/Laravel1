<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;



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
Route::get('/', [TestController::class, 'test'] );


//Route::get('/', function () {
  // return view('welcome');
  
//});

//Route::get('/contactos', function () {
  //  return 'Contactame';

   //->name('') sera el nombre del Rute que usaremos en la vista
    //Simpre utilizar Rutas con Nombre 
//})->name('contacto');
 

//Route::any('/custom', function() {
    //


//    $msj = 'Mensaje desde el Servidor ';
  //  $saludo = "Hola Mundo";

    

    //Le mandamos la variable MSJ

    //$msj es la variable creada Aqui
    //msj2 Seria la variable que tendriamos en la vista Custom
    //return view('custom', ['msj2' => $msj,'saludo' => $saludo, 'edad'=> 15 ]);



    //Otra Forma de hacer lo anterior seria la siguiente 

    //$data =['msj2' => $msj,'saludo' => $saludo, 'edad'=> 15];
   // return view('custom', $data);

//})->name('custom');


