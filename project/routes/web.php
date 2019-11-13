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

Route::post('/cadastro', ['as'=>'user.register', 'uses'=>'UserController@store']);

/*
Route::get('/index', ['uses', 'HomeController@index']);
Route::get('/planos', ['uses', 'HomeController@planos']);
Route::get('/assinatura', ['uses', 'HomeController@assinatura']);
Route::get('/sobre', ['uses', 'HomeController@sobre']);
Route::get('/api', ['uses', 'HomeController@api']);
Route::get('/registre', ['uses', 'HomeController@registre']);
*/
