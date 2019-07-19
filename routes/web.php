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

Route::get('/','PaginaInicialController@exibirPaginaInicial');
Route::get('/','PaginaInicialController@exibirModalidades');

Route::get('/cadastroUsuario','CadastroUsuarioController@exibirCadastroUsuario');


Route::get('/feed/{slug}','FeedController@exibirDetalhes')->middleware(['auth']);
Route::post('/feed/{slug}', 'FeedController@salvarEvento')->middleware(['auth']);

Route::get('/cadastroEvento/{id_modalidade}','CadastroEventoController@exibirCadastroEvento')->middleware(['auth']);

Route::get('/post','PostController@exibirPost')->middleware(['auth']);

// routes ele já considera o metodo Post então é necessário criar o route::post para cadastrar usuario
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','PaginaInicialController@exibirModalidades')->name('home');


Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/post/{id}', 'PostController@inicio')->middleware(['auth']);
Route::get('/listar-tarefa/{id}', 'PostController@reloadAJAX')->middleware(['auth']);

// toda vez que envia tem q ser post
Route::post('/nova-tarefa','PostController@novaTarefa')->middleware(['auth']);

Route::get('/concluir-tarefa/{id}','Controller@concluirTarefa')->middleware(['auth']);

// Enviando formulário
Route::post('/home', 'EmailController@postContact')->name('postContact');
