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

// // Route::prefix('admin')->group(function() {
//     Route::get('/', 'AdminController@index');
// });


Route::group(['prefix' => 'provider'], function() {
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::get('/Practitioner','AdminController@home')->name('admin.home');
        Route::post('/login','AdminController@authenticate')->name('admin.auth');
    });
    
    Route::group(['middleware'=> 'admin.auth'], function(){
        Route::get('/dashboard','AdminController@Dashboard')->name('admin.dashboard');
        Route::get('/calander','AdminController@calander')->name('admin.calander');
        Route::get('/available','AdminController@available')->name('admin.available');
        Route::get('/available_data','AdminController@providerdd');
        Route::get('/logout','AdminController@logout')->name('admin.logout');

        //Ajax method

        

        Route::post('/adminCreate','AdminController@store')->name('adminCreate');
        Route::delete('/calendardestroy/{id}','AdminController@destroy')->name('calendardestroy');
        Route::patch('/calendar/update/{id}','AdminController@update')->name('calendar.update');
     

          
    });
});

