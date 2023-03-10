<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;

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
Route::get('/', function(){
    return view('welcome');
} );

Route::middleware([App\Http\Middleware\TestMiddleware::class])->group(function(){

    Route::get('/test/{id?}/{name?}', function($id=10,$name = "Luis"){
        echo $id;
        echo $name;
    } );

});
 Route::group(['prefix' => 'dashboard'], function(){
     
     Route::resource('post', PostController::class);
     Route::resource('category', CategoryController::class);
});

// Route::controller(PostController::class)->group(function(){

    
//     Route::get('post','index')->name("post.index");
//     Route::get('post/{post}','show')->name("post.show");
//     Route::get('post/create','create')->name("post.create");
//     Route::get('post/{post}/edit','edit')->name("post.edit");
    
//     Route::post('post','store')->name("post.store");
//     Route::put('post/{post}','update')->name("post.update");
//     Route::delete('post/{post}','delete')->name("post.destroy");
// });    
