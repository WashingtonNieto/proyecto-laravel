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
    return view('welcome');
});

/*
 * GET      : Conseguir datos
 * POST     : Guardar datos
 * PUT      : Actualizar recursos
 * DELETE   : Borrar recursos
 */
Route::get('/mostrar-fecha', function(){

    $titulo = "Estoy mostrarndo la fecha";
    return view('mostrar-fecha', array(
        'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo}/{year?}',function($titulo = 'No hay pelicula seleccionada', $year = 2022){
   return view('pelicula',array(
      'titulo' => $titulo,
      'year' => $year 
   )); 
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));