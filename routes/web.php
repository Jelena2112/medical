<?php

use App\Http\Controllers\DentalRecordsController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserInfoController;
use App\Http\Middleware\CheckAdminMiddleware;
use App\Http\Middleware\CheckDoctorMiddleware;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function() {

    Route::view('/', 'homepage');

    Route::get('/karton', [UserController::class, 'getUserInfo'])
        ->name('userAllInfo.get');

    Route::middleware(CheckDoctorMiddleware::class)->group(function () {
        Route::get('/korisnici', [UserInfoController::class, 'showAllUsers'])
            ->name('showAllUsers');

        Route::get('/stomatoloski_karton/{user}', [DentalRecordsController::class, 'getUserDentalRecords'])
            ->name('userDentalRecord');

        Route::post('/dentalRecordUpdate', [DentalRecordsController::class, 'updateUserDentalRecord'])
            ->name('updateDentalRecord');

        Route::get('/medicinski_karton/{user}', [MedicalRecordController::class, 'medicalRecord'])
            ->name('userMedicalRecord');

        Route::post('/medicalRecordUpdate' ,[MedicalRecordController::class, 'updateUserMedicalRecord'])
            ->name('updateMedicalRecord');
    });

   Route::middleware(CheckAdminMiddleware::class)->group(function () {
        Route::post('/admin/updateUserType', [UserController::class, 'changeUserType'])
            ->name('changeUserType');
    });

    Route::get('/profil',[UserInfoController::class, 'index'])
        ->name('userInfo.get');

    Route::post('/saveUserInfo',[UserInfoController::class, 'saveUserInfo'])
        ->name('userInfo.post');

});
