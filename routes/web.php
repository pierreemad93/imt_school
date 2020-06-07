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
    return view('front.index');
});

Route::group(['namespace' =>  'Auth' ] , function (){
    Route::get('/login', 'LoginController@frontLogin')->name('frontLogin');
    Route::get('/register', 'RegisterController@frontRegister')->name('frontRegister');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
