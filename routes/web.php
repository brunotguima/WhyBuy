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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/sobrenos', 'HomeController@sobrenos');

Route::get('/empreendimentos', function (){
    return view('/empreendimentos');
});

Route::get('suporte','EmailController@getContato')->name('suporte.get');
Route::post('suporte','EmailController@postContato')->name('suporte.post');
Route::resource('empreendimentos','EmpreendimentosController');
Route::resource('perfil','PerfilController');
Route::resource('maps','MapController');
Route::resource('promocao','PromocaoController');
