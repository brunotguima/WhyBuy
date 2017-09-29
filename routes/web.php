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

Route::get('/', function () {
    return view('/home');
});

Route::get('/home', function () {
    return view('/home');
});

Auth::routes();

Route::get('/sobrenos', function (){
    return view('/sobrenos');
});
Route::get('/empreendimentos', function (){
    return view('/empreendimentos');
});

Route::get('suporte','EmailController@getContato')->name('suporte.get');
Route::post('suporte','EmailController@postContato')->name('suporte.post');
Route::resource('empreendimentos','EmpreendimentoController');
Route::resource('perfil','PerfilController');
