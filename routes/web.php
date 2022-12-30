<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/facebook/callback', [\App\Http\Controllers\LoginController::class, 'login_facebook']);

Route::get('/facebook', function () {

    return Socialite::driver('facebook')->redirect();
});

Route::get('/google/callback', [\App\Http\Controllers\LoginController::class, 'login_google']);

Route::get('/google', function () {

    return Socialite::driver('google')->redirect();
});


