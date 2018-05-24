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

// Route::get('/dashboard', function() {
//     return view('dashboard');
// });

Route::get('/dashboard', 'ViewController@index');
Route::get('/log/{value}', 'ViewController@log');
Route::get('/lihatlog/{value}', 'ViewController@lihatlog');
Route::get('/downloadlog/{value}', 'ViewController@downloadlog');
// Route::post('/store', 'Nutrition\Recipe\CreateController@store');