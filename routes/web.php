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
    return view('guest.welcome');
});

Auth::routes();


Route::middleware('auth')
    // Folder where there are the controllers
    ->namespace('Admin')
    // Update the name with admin.
    ->name('admin.')
    // Update URL with admin/
    ->prefix('admin')
    // All the routes
    ->group(function() {


        Route::get('home', 'HomeController@index')->name('home');
        Route::resource('users', 'UserController');
        Route::resource('posts', 'PostController');
        Route::resource('categories', 'CategoryController');
//

//        CUSTOM ROUTES
//        Route::patch('posts/{id}/deleteFromCategory', 'PostController@deleteFromCategory')->name('posts.deleteFromCategory');
    });

Route::namespace('Api')->group(function () {
//    Route::get('posts', 'PostController@index');
//    Route::get('posts/{id}', 'PostController@show');
    // Add more routes for creating, updating, and deleting posts as needed

//    Route::get('categories', 'CategoryController@index');
//    Route::get('categories/{id}', 'CategoryController@show');

    Route::post('contacts', 'ContactController@store');
});


Route::get("{any?}", function () {
    return view("guest.home");
})->where("any", ".*");
