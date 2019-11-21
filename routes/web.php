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

Route::get('/', "HomeController@index");
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/register', 'RegisterController@create');
// Route::post('/register', 'RegisterController@create');
Route::get('/working','HomeController@working');
//Route::get('/admin/admin','AdminController@index')->middleware("auth", "role:admin", "role:superAdmin");
Route::get('/admin/admin','AdminController@index')->middleware('auth');

/*
|--------------------------------------------------------------------------
|USER CONTROLLER

|--------------------------------------------------------------------------
*/

Route::get('/perfil', 'UserController@perfil');
Route::get('/admin/usuarios/listado-de-usuarios', 'UserController@listar')->middleware("auth",'role:admin', 'role:superAdmin'); //lista todos los usuarios
Route::get('/admin/usuarios/listado-de-usuariosPorMail', 'UserController@listarPorMail')->middleware("auth",'role:admin', 'role:superAdmin'); //lista todos los usuarios por email
Route::get('/admin/usuarios/listado-de-usuariosPorApellido', 'UserController@listarPorApellido')->middleware("auth",'role:admin', 'role:superAdmin'); //lista todos los usuarios por email
Route::get('/admin/usuarios/modificar-usuario-{id}','UserController@modificarUsuario')->middleware("auth",'role:admin', 'role:superAdmin');
Route::post('/admin/usuarios/eliminar-usuario-{id}', 'UserController@deleteUsuario')->middleware("auth",'role:admin', 'role:superAdmin');
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


Route::get('/admin/tramites/tramites-online', 'TramiteController@online');
Route::get('/admin/tramites/agregar-tramite','TramiteController@agregar')->middleware("auth","role:superAdmin"); // lista las munis
Route::get('/admin/tramites/modificar-tramite-{id}','TramiteController@modificarTramite')->middleware("auth","role:superAdmin");
Route::get('/admin/tramites/gestion-de-tramites','TramiteController@listarMunicipios')->middleware("auth","role:superAdmin"); //listado de tramites
Route::get('/admin/tramites/listado-por-municipio-{id}','TramiteController@listarPorMuni')->middleware("auth","role:superAdmin"); //listado por municipio
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

/*
|--------------------------------------------------------------------------
|Rutas de errores

|--------------------------------------------------------------------------
*/
