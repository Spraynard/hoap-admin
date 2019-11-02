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
<<<<<<< HEAD
Route::get('/form', function () {
    return view('form');
});
=======
>>>>>>> c8b9454fb61d9feacc39210b1743f3b552ed5e76


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
<<<<<<< HEAD

Route::resource('applicants', 'ApplicantController');
=======
>>>>>>> c8b9454fb61d9feacc39210b1743f3b552ed5e76
