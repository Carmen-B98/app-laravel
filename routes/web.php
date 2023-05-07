<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('pages.home');
//      dd(config('voyager.dashboard.widgets'));
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Route::resource('sliders', 'SlidersController');

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::post('/send-email', 'App\Http\Controllers\ContactController@sendEmail')->name('send.email');
