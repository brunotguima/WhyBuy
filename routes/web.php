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
Route::get('/teste',function(){
    return view('promocao/teste');
});
Route::get('suporte','EmailController@getContato')->name('suporte.get');
Route::post('suporte','EmailController@postContato')->name('suporte.post');
Route::resource('promocao','PromocaoController');
//Route::resource('empreendimentos','EmpreendimentosController');
Route::prefix('empreendimentos')->group(function() {
    Route::get('/create', 'EmpreendimentosController@create')->name('empreendimentos.create');
    Route::get('/{empreendimento}', ['uses' => 'EmpreendimentosController@show', 'as' => 'empreendimentos.show']);
    Route::post('/', ['uses' => 'EmpreendimentosController@store', 'as' => 'empreendimentos.store']);
    Route::get('/{empreendimento}/edit', ['uses' => 'EmpreendimentosController@edit', 'as' => 'empreendimentos.edit']);
    Route::put('/{empreendimento}', ['uses' => 'EmpreendimentosController@update', 'as' => 'empreendimentos.update']);
    Route::delete('/{empreendimento}', ['uses' => 'EmpreendimentosController@destroy', 'as' => 'empreendimentos.destroy']);
    Route::get('/', 'EmpreendimentosController@index')->name('empreendimentos.index');
});

Route::resource('perfil','PerfilController');
Route::resource('maps','MapController');

