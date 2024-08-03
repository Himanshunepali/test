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

Route::get('/sdfthy', function () {
    echo "the login is in maintainance";
})->name('user.login');

Route::get('/sdfdghfg', function () {
    echo "Prince  and dhiraz are very good brothers";
})->name('admin.login');


Route::get('/fdfhgj', function () {
    echo "Prince  and dhiraz are very good brothers";

})->name('user.register');

Route::get('/test','HimanshuController@index')->name('user.register');

Route::get('/table','HimanshuController@table');

Route::get('/users','UserController@index')->name('users.index');
Route::get('/users/create','UserController@create')->name('users.create');
Route::post('/users/store','UserController@store')->name('users.store');
Route::get('/users/delete/{id}','UserController@delete')->name('users.delete');
Route::get('/users/edit/{id}','UserController@edit')->name('users.edit');
Route::post('/users/update/{id}','UserController@update')->name('users.update');


