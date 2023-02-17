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

/**
 * Routing Paling dasar
 */

 Route::get('/kontak', function () {
    return view ('kontak');
 });

 Route::get('/contoh', 'ContohController@ambil');
 Route::resource('example', ExampleController::class);

 Route::match(['get', 'post'], '/contoh', function () {
     return redirect('/');
 });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/task', 'TaskController@index');

Route::get('/task/create', 'TaskController@create');

Route::post('/savetask', 'TaskController@store');

Route::get('/task/{id}', 'TaskController@detail');
Route::get('/delete/{id}', 'TaskController@delete');
Route::get('taskedit/{id}', 'TaskController@edit');

Route::view('/tampilan', 'template.template');