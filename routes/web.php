<?php

use App\Models\Sport;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BookingController;

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

// Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
// Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('customer/google/callback', [GoogleLoginController::class, 'callback'])->name('google.callback');

Route::get('book/available-shifts', [BookingController::class, 'availableShifts'])->name('book.shift.available');
Route::post('confirm-booking', [BookingController::class, 'store'])->name('book.store');
Route::get('book/{sports_name}', [BookingController::class, 'index'])->name('book.index');
Route::get('success', function(){
    return view('frontend.success');
})->name('success');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');
