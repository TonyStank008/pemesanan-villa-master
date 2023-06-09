<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VillaController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BookingController;

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


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'auth'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'create'])->name('register');
});

Route::middleware(['auth'])->group(function () {

    Route::middleware(['must-admin'])->group(function () {
        // Dashboard
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });

        // Villa Route
        Route::get('/add-villa', function () {
            return view('admin.villa.add-villa');
        });
        Route::get('/villa', [VillaController::class, 'index']);
        Route::post('/villa', [VillaController::class, 'store']);
        Route::get('/villa/{id}', [VillaController::class, 'show']);
        Route::delete('/villa/{id}', [VillaController::class, 'destroy']);
        Route::get('/villa-update-section-1/{id}', [VillaController::class, 'editSection1']);
        Route::get('/villa-update-section-2/{id}', [VillaController::class, 'editSection2']);
        Route::get('/villa-update-section-3/{id}', [VillaController::class, 'editSection3']);
        Route::put('/villa-update-section-1/{id}', [VillaController::class, 'updateSection1']);
        Route::put('/villa-update-section-2/{id}', [VillaController::class, 'updateSection2']);
        Route::post('/villa-update-section-3-add/{id}', [VillaController::class, 'updateSection3Add']);
        Route::delete('/villa-update-section-3-delete/{id}', [VillaController::class, 'updateSection3Delete']);

        // User Route
        Route::get('/user', [UserController::class, 'index']);
        Route::get('/user/{id}', [UserController::class, 'show']);

        // Booking Route
        Route::get('/booking', [BookingController::class, 'index']);
        Route::post('/booking-confirm-1/', [BookingController::class, 'bookingConfirm1']);

        // Slider 
        Route::get('/slider', [SliderController::class, 'index']);
        Route::post('/slider', [SliderController::class, 'store']);
        Route::delete('/slider/{id}', [SliderController::class, 'destroy']);
    });

    Route::middleware(['must-user'])->group(function () {
        Route::get('/home', [HomeController::class, 'index']);
        Route::get('/detailvilla/{id}', [HomeController::class, 'show']);
        Route::get('/explore', function () {
            return view('explore');
        });

        Route::get('/aboutus', function () {
            return view('aboutus');
        });

        Route::get('/contact', function () {
            return view('contact');
        });
        Route::post('/booking', [BookingController::class, 'store']);
        Route::post('/booking-detail', [BookingController::class, 'bookingDetails']);
        Route::get('/paymentPage/{bookingCode}', [BookingController::class, 'payment']);
        Route::post('/confirm-payment', [BookingController::class, 'confirmPayment']);
        Route::post('/getBookingDate', [BookingController::class, 'getBookingDate']);

        //Profile
        Route::get('/profile', [UserController::class, 'profile']);
        Route::post('/profile', [UserController::class, 'addReviews']);
        Route::get('/profile/booking-list/', [UserController::class, 'getUserBooking']);
    });


    Route::get('/logout', [Authcontroller::class, 'logout']);
    Route::get('/', function () {
        return redirect('login');
    });
});
