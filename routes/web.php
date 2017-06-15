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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => '/'
]);

//se crea la ruta de esta manera ya que si queremos luego cambiar el URL seria mas sencillo
Route::get('registro', [
    'uses' => 'HomeController@registro',
    'as'   => 'registro'
]);

Route::get('iniciodesesion', [
    'uses' => 'HomeController@login',
    'as'   => 'inicio'
]);

//ruta de consulta de todos los usuarios registrados
Route::get('saludo',[
    'uses' => 'HomeController@saludo',
    'as'   => 'saludo'
]);


Auth::routes();
//Route::resource('register','Auth.registerController');

Route::get('/home', 'HomeController@iniciado')->name('home');

//para el registro de personas
Route::group(['prefix' => 'admin'], function (){
    Route::resource('personas','PersonaController');
});

//para destruir usuarios registrados
Route::get('users/{id}/destroy',[
    'uses' => 'HomeController@destroy',
    'as' => 'users.destroy'
]);

//para modificar usuarios registrados
Route::get('users/{id}/edit',[
    'uses' => 'HomeController@edit',
    'as' => 'users.edit'
]);

//para actualizar usuarios registrados
Route::put('users/{id}',[
    'uses' => 'HomeController@update',
    'as' => 'users.update'
]);

//para mandar a los usuarios para seleccionar y enviar las notificaciones
Route::get('notificaciones',[
    'uses' => 'NotificationController@show',
    'as' => 'notificaciones'
]);

//para mandar a las notificaciones usuarios registrados
Route::get('notificaciones/{id}',[
    'uses' => 'NotificationController@mensaje',
    'as' => 'notificaciones.mjs'
]);

//grupo de rutas de notificacion
Route::group(['prefix' => 'crear'], function (){
    Route::resource('mensaje','NotificationController');
});

//para enviar a las notificaciones a la vista principal
Route::get('mensaje', [
    'uses' => 'NotificationController@index',
    'as'   => 'mensaje.index'
]);

//grupo de rutas de Reserva de instalacion
Route::group(['prefix' => 'registrar'], function (){
    Route::resource('reserva','ReservaController');
});

//para enviar a la pagina de reseva
Route::get('reserva', [
    'uses' => 'ReservaController@index',
    'as'   => 'reserva.index'
]);



//envio de emails
Route::get('enviar', ['as' => 'enviar', function () {

    $data = ['link' => 'http://styde.net'];

    \Mail::send('emails.notificacion', $data, function ($message) {

        $message->from('email@styde.net', 'Styde.Net');

        $message->to('user@example.com')->subject('Notificación');

    });
    return "Se envío el email";
}]);
