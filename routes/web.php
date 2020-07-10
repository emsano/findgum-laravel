<?php

use App\Http\Controllers\Api\AdminController;
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

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

// Route::get('/admin/posts', function () {
//     $admin_posts_active = 'active';
//     $admin_posts_show = 'show';

//     return view('admin.posts', compact('admin_posts_active', 'admin_posts_show'));
// })->name('admin-posts');


Route::group(['namespace' => 'Api'], function () {
    Route::get('/admin', 'AdminController@dashboardIndex')->name('admin');

    Route::get('admin/posts/{selected}','AdminController@postsIndex')->name('admin-posts');

    Route::get('/admin/posting-options/sub-categories', 'AdminController@subCategIndex')->name('admin-posting-options-sub-categories');
    Route::get('/admin/posting-options/categories', 'AdminController@categIndex')->name('admin-posting-options-categories');


    Route::get('admin/view-post/{id}','AdminController@viewPostIndex')->name('view-post');
    Route::get('admin/view-post/uploads/products/{img}', 'AdminController@getPostImages')->name('get-post-images');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
