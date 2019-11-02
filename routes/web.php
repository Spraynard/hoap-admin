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
Route::get('/form', function () {
    return view('form');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::resource('participants', 'ParticipantController');

Route::get('donor/create_from_volunteer/{id}', 'DonorController@createFromVolunteer')->name('donor.createFromVolunteer');
Route::get('volunteer/create_from_donor/{id}', 'VolunteerController@createFromDonor')->name('volunteer.createFromDonor');
