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

Route::get('/', 'WelcomeController@index');

/*
| Register Authentifiaction
*/
Route::get('/confirm/{id}/{token}', 'Auth\Registercontroller@confirm');


/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------|
*/

Route::name('profil.user')->get('profil/user', 'Front\UserController@edit');
Route::post('profil', 'Front\UserController@update');


/*
|--------------------------------------------------------------------------
| Back-End
|--------------------------------------------------------------------------|
*/

// Home
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::prefix('admin')->middleware('editeur')->namespace('Back')->group( function(){

    Route::resource('formation', 'FormationController');
    Route::resource('formateur', 'FormateurController');
    Route::resource('session', 'SessionController');
});


Route::prefix('admin')->middleware('admin')->namespace('Back')->group( function(){

    Route::resource('users', 'UserController',['only' => [
        'index', 'edit', 'destroy', 'update'
    ]]);
    
});