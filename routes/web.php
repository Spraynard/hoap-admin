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

Route::get('donor/create_from_volunteer/{id}', 'DonorController@createFromVolunteer')->name('donor.createFromVolunteer');
Route::get('donor/create_from_participant/{id}', 'DonorController@createFromParticipant')->name('donor.createFromParticipant');
Route::get('volunteer/create_from_donor/{id}', 'VolunteerController@createFromDonor')->name('volunteer.createFromDonor');
Route::get('volunteer/create_from_participant/{id}', 'VolunteerController@createFromParticipant')->name('volunteer.createFromParticipant');
