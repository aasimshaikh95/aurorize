<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\VerificationController;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;
use Illuminate\Support\Facades\Artisan;


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

Route::get('logs', [LogViewerController::class, 'index']);


Route::get('/run-migrations', function () {
    Artisan::call('migrate', ['--force' => true]);
    return 'Migrations executed successfully.';
});

Route::get('/run-seeder', function () {
    Artisan::call('db:seed', ['--class' => 'AdminsTableSeeder', '--force' => true]);
    return 'Seeder executed successfully.';
});


Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('/inquiry', [HomeController::class, 'homeInquiry'])->name('home.inquiry');
Route::post('/inquiry/submit', [HomeController::class, 'submitInquiry'])->name('home.inquiry.submit');

Route::get('/rcm', [HomeController::class, 'getRcm'])->name('home.rcm');
Route::get('/idr', [HomeController::class, 'getIdr'])->name('home.idr');
Route::get('/aboutUs', [HomeController::class, 'getAboutUs'])->name('home.aboutUs');


