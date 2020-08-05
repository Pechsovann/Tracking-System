<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['prefix' => 'admin' , 'namespace' => 'Backend', 'middleware' => 'auth'], function () {
    require __DIR__ . '/web/dashboard.php';
    require __DIR__ . '/web/user.php';

    Route::group(['prefix' => 'utilities' , 'namespace' => 'utilities'], function() {
        Route::get('colors', 'colorsController@index');
        Route::get('borders', 'bordersController@index');
        Route::get('animations', 'animationsController@index');
        Route::get('other', 'otherController@index');
    });

    Route::group(['prefix' => 'components' , 'namespace' => 'Components'], function() {
        Route::get('button', 'buttonController@index');
        Route::get('card', 'cardController@index');
        Route::get('charts', 'chartsController@index');
    });

    Route::get('table', 'tableController@index');
});

Route::get('/home', 'HomeController@index')->name('home');
