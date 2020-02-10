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

Route::get('/about_my_self', function () {
    return view('pages.about_my_self');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dictionary', function () {
    return view('pages.dictionary');
});
Route::get('/grammar', function () {
    return view('pages.grammar');
});
Route::get('/english', function () {
    return view('pages.index');
});
Route::get('/phonetics', function () {
    return view('pages.phonetics');
});
Route::get('/speak', function () {
    return view('pages.speak');
});
Route::get('/verbbe', function () {
    return view('pages.verbbe');
});
//Route::get('/admin', function () {
//    return view('');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/admin/english', 'AdminController');

Route::resource('/english/speak', 'SpeakController');
