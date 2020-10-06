<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

// Route::get('/', );
Route::get('/', 'HomeController@index')->name('home');
Route::get('reports/index', 'HomeController@show')->name('reports');

// Route::get('/', ReportsGenerate::class);

Route::resource('projects', 'ProjectController')->middleware('auth'); 
Route::post('/upload-file', 'DocumentsController@store')->name('fileUpload');
Route::resource('activities', 'ActivityController')->middleware('auth');  

Route::resource('users', 'UserController')->middleware('auth'); 
Route::get('user/{user}/profile', 'UserController@profile')->name('profile');



