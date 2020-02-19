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
    return redirect('english/phonetics');
});
Route::get('/dictionary', function () {
    return view('pages.dictionary');
});
Route::get('/english', function () {
    return view('pages.index');
});
Route::get('english/phonetics', function () {
    return view('layout.phonetics');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/admin/english', 'AdminController');

Route::resource('/english/speak', 'SpeakController');
Route::resource('/english/grammar', 'GrammarController');
Route::resource('/english/dictionary', 'DictionaryController');
