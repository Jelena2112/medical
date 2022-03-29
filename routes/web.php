<?php

use App\Http\Controllers\UserInfoController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function() {

    Route::get('/profil',[UserInfoController::class, 'index'])
        ->name('userInfo.get');

    Route::post('/saveUserInfo',[UserInfoController::class, 'saveUserInfo'])
        ->name('userInfo.post');

    Route::get('/korisnici', [UserInfoController::class, 'showAllUsers'])
        ->name('showAllUsers');

});
