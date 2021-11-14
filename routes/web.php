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
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', '\App\Http\Controllers\DashboardController@index')->name('dashboard');
    
    Route::resource('/posts', \App\Http\Controllers\PostController::class);
    Route::resource('/profile', \App\Http\Controllers\ProfileController::class);
    Route::post('/profile/edit', '\App\Http\Controllers\ProfileController@edit')->name('profile.edit');
    Route::post('update-likes', '\App\Http\Controllers\PostController@updateLikes')->name('updateLikes');
    Route::post('save-comment', '\App\Http\Controllers\PostController@saveComment')->name('saveComment');

    



});




require __DIR__.'/auth.php';
