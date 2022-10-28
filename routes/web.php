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

Auth::routes();


/*  POST CONTROLLER STARTS HERE  */

// Route::get('/home', [App\Http\Controllers\ProfilesController::class, 'index'])->name('home');


//create post route
Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create']);

//show route
Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show']);

//post route
Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);


/*  PROFILE CONTROLLER STARTS HERE  */

//profile route
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');

//edit profile
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');

//update profile
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');
