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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/_register', function () {
    $value=session('key');
    if($value=="_regist2")
    {
    return view('register1');
    }
    else {
        return view('welcome');
    }
});
Route::post('/registerTo', 'user\UserController@regStep')->name('registerTo');