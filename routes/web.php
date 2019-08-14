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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', 'CreatesController@home');

Route::get('/create', 'CreatesController@create');

Route::post('/insert', 'CreatesController@insert');

Route::get('/update/{id}', 'CreatesController@update');

Route::post('/update_change/{id}', 'CreatesController@update_change');

Route::get('/delete/{id}', 'CreatesController@delete');

Route::get('/login/', 'CreatesController@login');

Route::post('/login_session/', 'CreatesController@login_session');

Route::get('/logout',  function () {
   Auth::logout();

   return redirect('/');
    
});


Route::auth();

Route::get('home', 'CreatesController@loginhome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
