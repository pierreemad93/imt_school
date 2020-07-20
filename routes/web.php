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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],function () {
       Route::get('/', function () {
            return view('front.index');
        });

       Route::group(['namespace' => 'Front'] , function (){
           Route::get('/profile' , 'ProfileController@index')->name('user.profile');
       });
      ############Start Courses Route ############
      Route::get('/full-diploma', function (){
          return view('front.courses.full_diploma');
      });
    Route::get('/arm', function (){
        return view('front.courses.arm');
    });
      ############End Courses Route ############
       Auth::routes(['verify' => true]);

       Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
});


Route::get('/course' , function (){
    $course=App\User::find(3)->course()->get();
    return $course ;
});

Route::get('/sec/{id}' , function ($id){
    $sec=App\Models\Admin\Course::find($id)->sechdule()->get();
    return $sec ;
});

