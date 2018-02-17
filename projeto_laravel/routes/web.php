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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/signin', 'UsuarioController@goSignin')->name('rotaSignin');

Route::get('/cadastro','UsuarioController@goCadastro')->name('rotaCadastro');

Route::get('/perfil','UsuarioController@goPerfil')->name('rotaPerfil');

Route::post('/login','UsuarioController@store')->name('rotaCadastrar');

Route::get('/busca','UsuarioController@goBusca')->name('rotaBusca');

Route::post('/resultado_busca','UsuarioController@show_usuarios_da_categoria')->name('rotaResultadoBusca');

Route::post('/verPerfil','UsuarioController@verPerfil')->name('rotaVerPerfil');

//Route::get('/perfil', 'UsuarioController@upload');

//Route::post('/perfil', 'UsuarioController@move');

//Route::get('/perfil','UsuarioController@goPerfil')->name('rotaPerfil')->middleware('auth');
