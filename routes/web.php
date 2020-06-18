<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/posting', function () {
    return view('single-post');
})->name('single-post');

Route::get('/messages', function () {
    return view('messages');
})->name('messages');

Route::get('/favorites', function () {
    return view('favorites');
})->name('favorites');

Route::get('/filtered', function () {
    return view('filtered-posts');
})->name('filtered-posts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
