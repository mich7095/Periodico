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

Route::get('/', "PagesController@home");
Route::get('/noticias/{noticia}', "NoticiasController@show");

Route::post('noticias/create', "NoticiasController@create")->middleware('auth:admin');
//Route::post('noticias/index', "NoticiasController@index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/{username}', 'AdminsController@show');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/CreaNoticia', 'AdminController@index')->name('admin.dashboard');
  });

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');
