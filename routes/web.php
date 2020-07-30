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
    return view('login');
});
Route::get('home', function () {
    return view('home');
});
Route::get('applicationForm', function () {
    return view('applicationForm');
});
Route::get('registerSuccessMessage', function () {
    return view('registerSuccessMessage');
});
Route::get('member', function () {
    return view('member');
});
Route::get('programme', function () {
    return view('programme');
});
Route::get('programmeParticipants', function () {
    return view('programmeParticipants');
});
Route::get('memberDetails', function () {
    return view('memberDetails');
});
Route::get('addProgrammeForm', function () {
    return view('addProgrammeForm');
});
Route::get('pending', function () {
    return view('pending');
});
Route::post('/publics', 'PublicsController@store')
  ->name('publics.store');
Route::get('/publics', 'PublicsController@index')
    ->name('publics.index');
