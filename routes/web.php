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

Route::get('saludo',[
    'uses' => 'HomeController@saludo',
    'as'   => 'saludo'

]);
Auth::routes();

Route::get('/home', 'HomeController@iniciado')->name('home');

//para el registro de personas
Route::group(['prefix' => 'admin'], function (){

    Route::resource('personas','PersonaController');

});

Route::resource('register','Auth.registerController');
//envio de mails
Route::get('enviar', ['as' => 'enviar', function () {

    $data = ['link' => 'http://styde.net'];

    \Mail::send('emails.notificacion', $data, function ($message) {

        $message->from('email@styde.net', 'Styde.Net');

        $message->to('user@example.com')->subject('Notificación');

    });
    return "Se envío el email";
}]);
