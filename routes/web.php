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
        Route::resource('productos', 'ProductosController');
        Route::resource('colecciones', 'ColeccionesController');
        Route::get('/productos', 'ProductosController@index')->name('productos.index');
        Route::get('/productos/show/{id}', 'ProductosController@show')->name('productos.show');
        Route::get('/colecciones', 'ColeccionesController@index')->name('colecciones.index');
        Route::get('/colecciones/show/{id}', 'ColeccionesController@show')->name('colecciones.show');
        Route::get('/productos/create', 'ProductosController@create')->name('productos.create');
        Route::get('/colecciones/create', 'ColeccionesController@create')->name('colecciones.create');
        Route::get('/colecciones/{order?}', 'ColeccionesController@index')->name('colecciones.index');
        Route::get('/productos/{order?}', 'ProductosController@index')->name('productos.index');
    });
});

Route::group([
    'as' => 'npanel.',
    'namespace' => 'Npanel',
    'prefix' => 'npanel'
], function() {
    Route::get('/register', 'UserController@register')->name('user.register');
    Route::post('/register', 'UserController@create')->name('user.create');
    Route::get('/logout', 'UserController@logout')->name('user.logout');
    Route::get('/signin', 'UserController@signin')->name('user.signin');
    Route::post('/signin', 'UserController@login')->name('user.login');
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/productos', 'ProductosController@index')->name('productos.index');
        Route::get('/productos/show/{id}', 'ProductosController@show')->name('productos.show');
        Route::get('/colecciones', 'ColeccionesController@index')->name('colecciones.index');
        Route::get('/colecciones/show/{id}', 'ColeccionesController@show')->name('colecciones.show');
        Route::get('/colecciones/{order?}', 'ColeccionesController@index')->name('colecciones.index');
        Route::get('/productos/{order?}', 'ProductosController@index')->name('productos.index');
    });
});