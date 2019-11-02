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

Voyager::routes();

Route::group(['prefix' => 'public'], function() {
    Route::get('participants', function() {
        return redirect()->route('participants.signup');
    });
    Route::get('participants/signup', 'ParticipantController@create')
        ->name('participants.signup');
    Route::post('participants/signup', 'ParticipantController@store');
});
