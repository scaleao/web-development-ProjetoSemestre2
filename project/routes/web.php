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
    return view('viewsHome.index');
});

Route::get('/index', function () {
    return view('viewsHome.index');
});

Route::get('/planos', function () {
    return view('viewsHome.planos');
});

Route::get('/assinatura', function () {
    return view('viewsHome.assinatura');
});

Route::get('/sobre', function () {
    return view('viewsHome.sobre');
});

Route::get('/api', function () {
    return view('viewsHome.api');
});

Route::get('/cadastro', function () {
    return view('viewsHome.cadastro');
});

Route::get('/login', function () {
    return view('viewsHome.login');
});


Route::group(['middleware'=>'auth'],function() {
    Route::get('/perfil', ['as'=>'user.perfil', 'uses'=>'PerfilController@index']);
    Route::post('/perfil', ['as'=>'user.update', 'uses'=>'PerfilController@store']);

    Route::get('/documento', ['as'=>'user.documento', 'uses'=>'DocumentoController@index']);
    Route::get('/documento/adicionar', ['as'=>'user.adicionar', 'uses'=>'DocumentoController@create']);
    Route::post('/documento/add_documento', ['as'=>'user.add_documento', 'uses'=>'DocumentoController@store']);
    Route::get('/documento/del_documento/{id}', ['as'=>'user.del_documento', 'uses'=>'DocumentoController@destroy']);

    Route::get('/timeline', ['as'=>'user.index_solicitacao', 'uses'=>'SolicitacaoController@index']);
    Route::get('/solicitacao', ['as'=>'user.add_solicitacao', 'uses'=>'SolicitacaoController@create']);
    Route::post('/solicitacao', ['as'=>'user.add_solicitacao', 'uses'=>'SolicitacaoController@store']);
    Route::get('/solicitacao/{id}', ['as'=>'user.view_solicitacao', 'uses'=>'SolicitacaoController@show']);

    Route::get('/assinaturas', ['as'=>'user.index_assinatura', 'uses'=>'AssinaturaController@index']);
    Route::post('/assinaturas/{id}', ['as'=>'user.add_assinatura', 'uses'=>'AssinaturaController@store']);
    Route::get('/assinaturas/{id}', ['as'=>'user.view_assinatura', 'uses'=>'AssinaturaController@show']);

    Route::get('/logout', ['as'=>'user.logout', 'uses'=>'UserController@logout']);
});

Route::post('/cadastro', ['as'=>'user.register', 'uses'=>'UserController@store']);
Route::post('/login', ['as'=>'user.login', 'uses'=>'UserController@login']);

/*
Route::get('/index', ['uses', 'HomeController@index']);
Route::get('/planos', ['uses', 'HomeController@planos']);
Route::get('/assinatura', ['uses', 'HomeController@assinatura']);
Route::get('/sobre', ['uses', 'HomeController@sobre']);
Route::get('/api', ['uses', 'HomeController@api']);
Route::get('/registre', ['uses', 'HomeController@registre']);
*/
