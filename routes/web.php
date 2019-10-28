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
Auth::routes();

Route::get('/', "HomeController@home");
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/register', 'RegisterController@create');
// Route::post('/register', 'RegisterController@create');
Route::get('/working','HomeController@working');
Route::get('/admin','HomeController@admin')->middleware("auth");
/*
|--------------------------------------------------------------------------
|USER CONTROLLER

|--------------------------------------------------------------------------
*/

Route::get('/perfil', 'UserController@perfil');
Route::get('/listado-de-usuarios', 'UserController@listar')->middleware("auth"); //lista todos los usuarios
Route::get('/listado-de-usuariosPorMail', 'UserController@listarPorMail')->middleware("auth"); //lista todos los usuarios por email
Route::get('/listado-de-usuariosPorApellido', 'UserController@listarPorApellido')->middleware("auth"); //lista todos los usuarios por email
Route::get('/modificar-usuario-{id}','UserController@modificarUsuario')->middleware("auth");
Route::post('/eliminar-usuario-{id}', 'UserController@deleteUsuario')->middleware("auth");
/*
|--------------------------------------------------------------------------
| MUNI CONTROLLER

|--------------------------------------------------------------------------
*/
Route::get('/municipalidades', 'MuniController@all');
Route::get('/municipalidades={id}', 'MuniController@detail');// va a listar los tramites por muni

/*
|--------------------------------------------------------------------------
| TRAMITES CONTROLLER
|--------------------------------------------------------------------------
*/


Route::get('/tramites-online', 'TramiteController@online');
Route::get('/agregar-tramite','TramiteController@agregar')->middleware("auth"); // lista las munis
Route::get('/listado-de-tramites','TramiteController@listarTramite')->middleware("auth"); //listado de tramites
Route::get('/listado-por-municipio','TramiteController@listarPorMuni')->middleware("auth"); //listado por municipio
/*
|--------------------------------------------------------------------------
| NOSOTROS CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/nosotros','NosotrosController@nosotros');
/*
|--------------------------------------------------------------------------
| PREGUNTAS FRECUENTES CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/preguntasfrecuentes','PreguntasController@preguntas');
/*
|--------------------------------------------------------------------------
| CAPACITACIONES CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/capacitaciones','CapacitacionesController@capacitaciones');
/*
|--------------------------------------------------------------------------
| CONTACTOS CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/contactos','ContactosController@contactos');

/*
|--------------------------------------------------------------------------
| CARRITO CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/carrito','CarritoController@carrito');

/*
|--------------------------------------------------------------------------
|FILE CONTROLLER

|--------------------------------------------------------------------------
*/
Route::get('/file/download/{file_name}/{file_title}','FileController@download')->middleware("auth");
Route::post('/agregar-tramite','FileController@store')->middleware("auth"); // guarda en la muni
Route::post('/tramites/eliminar', 'FileController@delete')->middleware("auth");
