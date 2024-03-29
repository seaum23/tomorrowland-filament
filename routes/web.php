<?php

use App\Models\Sport;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\SmsController;
use App\Models\Booking;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

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

Route::get('production', function(){
    Artisan::call('optimize:clear');
    Artisan::call('icons:cache');
});

Route::get('customer/google/callback', [GoogleLoginController::class, 'callback'])->name('google.callback');
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth:customer'])->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('book/available-shifts', [BookingController::class, 'availableShifts'])->name('book.shift.available');
    Route::get('book/{sports_name}', [BookingController::class, 'index'])->name('book.index');
    Route::post('confirm-booking', [BookingController::class, 'store'])->name('book.store');
    Route::get('success', function(){
        if(Session::get('booking') === null){
            return redirect(route('home'));
        }

        $booking = Booking::with('bookingTimes')->find(Session::get('booking'));
        return view('frontend.success', compact('booking'));
    })->name('success');

    Route::view('contact-us','frontend.contact_us')->name('contact.us');
});

Route::get('send', [SmsController::class, 'index']);

Route::post('book-time/{booking_time_id}/update', [BookingController::class, 'bookingTimeUpdate'])->name('book.time.update');