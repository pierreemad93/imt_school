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


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function (){
    Route::group(['namespace' => 'Admin'] , function (){
        Route::get('/dashboard','DashboardController@index')->name('admin.dashboard');
        Route::resource('/users' , 'UsersController');
        Route::get('/imt_pdf/', 'UsersController@pdf')->name('imtPdf');
        Route::resource('/courses' , 'CoursesController');
    });
});





