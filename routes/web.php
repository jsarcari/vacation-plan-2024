<?php

use App\Http\Controllers\HolidayPlanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PdfController;
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
    return redirect('/vacations');
})->middleware(\App\Http\Middleware\Authenticator::class);

Route::resource('/vacations', HolidayPlanController::class)->except(['show']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('signin');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/generate-pdf/{id}', [PdfController::class, 'download'])->name('generate-pdf');
