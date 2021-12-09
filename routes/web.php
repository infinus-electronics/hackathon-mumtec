<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {return view('pages.anki');})->name('home');
Auth::routes();

Route::get('/home', function () {return view('pages.anki');})->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 


	//  Route::get('dashboard', function () {return view('pages.dashboard');})->name('dashboard');
	 Route::get('kanban', function () {return view('pages.kanban');})->name('kanban'); 
	 Route::get('calendar', function () {return view('pages.calendar');})->name('calendar'); 
	 Route::get('homework-help', function () {return view('pages.chatbot');})->name('homework-help');
    //  Route::get('anki', function () {return view('pages.anki');})->name('anki');
	Route::match(['get', 'post'], '/botman', 'BotManController@handle');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

    
});

// Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');

