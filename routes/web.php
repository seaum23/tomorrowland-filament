<?php

use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\HomeController;
use App\Models\Sport;
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

Route::get('book/available-shifts', [BookingController::class, 'availableShifts'])->name('book.shift.available');
Route::post('confirm-booking', [BookingController::class, 'store'])->name('book.store');
Route::get('book/{sports_name}', [BookingController::class, 'index'])->name('book.index');

Route::get('/', [HomeController::class, 'index'])->name('home');
