<?php

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

// Route::get('/', ['as' => 'home', function () {
//     // echo "<a href=".route('contactos').">Contactos</a><br>";
//     // echo "<a href=".route('contactos').">Contactos</a><br>";
//     // echo "<a href=".route('contactos').">Contactos</a><br>";
//     // echo "<a href=".route('contactos').">Contactos</a><br>";
//     // echo "<a href=".route('contactos').">Contactos</a><br>";
//     // echo "<a href=".route('contactos').">Contactos</a><br>";
//     // echo "<a href=".route('contactos').">Contactos</a><br>";
//     return view('home', ['dato' => "hola mundo"]);
// }]);

// Route::get('contactame', ['as' => 'contactos', function(){
//     return view('contactos');
// }]);

// Route::get('saludos/{nombre?}', ['as' => 'saludos' ,function($nombre = "invitado"){
//     //return "Saludos $nombre";
//     //return view('saludo', ['nombre' => $nombre]);
//     //return view('saludo')->with(['nombre' => $nombre]);
//     $consolas = [
//         "Play Station 4",
//         "Xbox One",
//         'Wii U'
// ];
//     $html = "<h2>ESTE ES UN TITULO</h2>";
//     return view('saludo', compact('nombre','html', 'consolas'));
// }])->where('nombre', "[A-Za-z]+");

//rutas limpias y por controller
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('contactame', ['as' => 'contactos', 'uses' => 'PagesController@contact']);
Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludo'])->where('nombre', "[A-Za-z]+");
Route::post('contacto', 'PagesController@mensajes');