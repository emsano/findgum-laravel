<?php

use App\Http\Controllers\Api\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Route::namespace('Api')->group(function () {
    Route::get('/posting/{id}', 'PostingController@index')->name('single-post');
    Route::get('/profile/{id}', 'ProfileController@index')->name('profile');

});

Route::get('/messages', function () {
    return view('messages');
})->name('messages');

Route::get('/policies', function () {
    return view('policies');
})->name('policies');

Route::get('/favorites', function () {
    return view('favorites');
})->name('favorites');

Route::get('/filtered', function () {
    return view('filtered-posts');
})->name('filtered-posts');

// Route::get('/profile', function () {
//     return view('profile');
// })->name('profile');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::prefix('/admin')->namespace('Api')->group(function () {
    Route::get('/', 'AdminController@dashboardIndex')->name('admin');

    Route::get('/posts/{selected}','AdminController@postsIndex')->name('admin-posts');

    Route::get('/posting-options/sub-categories', 'AdminController@subCategIndex')->name('admin-posting-options-sub-categories');
    Route::get('/posting-options/categories', 'AdminController@categIndex')->name('admin-posting-options-categories');

    Route::get('/view-post/{id}','AdminController@viewPostIndex')->name('view-post');
    Route::get('/view-post/uploads/products/{img}', 'AdminController@getPostImages')->name('get-post-images');

    Route::get('/view-categ/{id}', 'AdminController@viewCateg')->name('view-categ');
    Route::get('/view-sub-categ/{id}', 'AdminController@viewSubCateg')->name('view-sub-categ');

    Route::get('/users/{selected}', 'AdminController@userMaintenanceIndex')->name('user-maintenance');
    Route::get('/users/view/{id}', 'AdminController@viewUserIndex')->name('view-user');

    Route::get('/admin-profile', 'AdminController@adminProfileIndex')->name('view-admin');
});
