<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*             ROUTES AUTENTIFICAR                 */

Route::get('autentificacion','ControllerAutentificacion@index');
Route::get('logout','ControllerAutentificacion@logout');
Route::resource('autentificacion','ControllerAutentificacion');



/*             ROUTES PRINCIPAL                 */

Route::resource('principal','ControllerPrincipal@index');



/*             ROUTES USUARIOS                 */

Route::get('usuario', 'ControllerUsuario@index');
Route::resource('usuario', 'ControllerUsuario');
Route::resource('usuario/create','ControllerUsuario@create');
Route::resource('usuario/edit','ControllerUsuario@edit');


/*             ROUTES USUARIOS                 */

Route::get('descripcion', 'ControllerDescripcion@index');
Route::resource('descripcion', 'ControllerDescripcion');
Route::resource('descripcion/create','ControllerDescripcion@create');
Route::resource('descripcion/edit','ControllerDescripcion@edit');


/*             ROUTES PERFIL               */

Route::get('account', 'ControllerAccount@index');
Route::resource('account', 'ControllerAccount');
Route::resource('account/changep','ControllerAccount@changep');
Route::resource('account/pcambio','ControllerAccount@cambio');
Route::resource('account/edit','ControllerAccount@index');


/*             ROUTES NOTICIA               */

Route::get('noticia', 'ControllerNoticia@index');
Route::resource('noticia', 'ControllerNoticia');
Route::resource('noticia/create','ControllerNoticia@create');
Route::resource('noticia/edit','ControllerNoticia@edit');

