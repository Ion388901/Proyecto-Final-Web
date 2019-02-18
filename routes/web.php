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

/**
 * cambiar las rutas protected por colecciones, productos hacia edit y delete
 */
Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::resource('productos', 'ProductosController');
Route::resource('colecciones', 'ColeccionesController');
Route::group([
    'as' => 'panel.',
    'namespace' => 'Panel',
    'prefix' => 'panel'
], function() {
    Route::get('/register', 'UserController@register')->name('user.register');
    Route::post('/register', 'UserController@create')->name('user.create');
    Route::get('/logout', 'UserController@logout')->name('user.logout');
    Route::get('/signin', 'UserController@signin')->name('user.signin');
    Route::post('/signin', 'UserController@login')->name('user.login');
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/protected-1', function() {
            return 'protected-1';
        })->name('protected-1');
        Route::get('/protected-2', function() {
            return 'protected-2';
        })->name('protected-2');
    });
});