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

// Route::prefix('practice')->group(function() {
//     Route::get('/', 'PracticeController@index');
// });


Route::group(['prefix' => 'practice'], function() {
    Route::group(['middleware' => 'practice.guest'], function(){
        Route::get('/form','PracticeController@home')->name('practice.home');
        Route::post('/authenticate','PracticeController@authenticate')->name('practice.auth');
    });
   
    Route::group(['middleware'=> 'practice.auth'], function(){
        Route::get('/practic_dashboard','PracticeController@Dashboard')->name('practicedashboard');
        Route::get('/practicelogout','PracticeController@logout')->name('practicelogout');
        Route::get('/practicecalander','PracticeController@calander')->name('Practice.calander');
        Route::get('/practice_available','PracticeController@available')->name('Practice.available');
        Route::get('/available_data','PracticeController@providerdd');
        
        
        //Ajax data insert -------------------------------------
        Route::post('/PracticeCreate','PracticeController@store')->name('PracticeCreate');
        Route::delete('/practice/destroy/{id}','PracticeController@destroy')->name('practice.destroy');
        Route::patch('/calendar/update/{id}','PracticeController@update')->name('practice.update');
        
          
    });
});