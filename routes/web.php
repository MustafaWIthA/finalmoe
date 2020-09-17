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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', );
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
Route::resource('projects', 'ProjectController')->middleware('auth');  //->middleware('auth');

Route::resource('users', 'UserController')->middleware('auth');  //->middleware('auth');
