<?php

use Illuminate\Support\Facades\Route;
use App\Models\Destination;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ParkController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\API\BookingController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
});
Route::get('/nakuruparks', function () {
    return view('nakuruparks');
});
Route::get('/nakuruhotels', function () {
    return view('nakuruhotels');
});
Route::get('/bogoria', function () {
    return view('bogoria');
});
Route::get('/nakuru', function () {
    return view('nakuru');
});
Route::get('/naivasha', function () {
    return view('naivasha');
});

Route::get('/book', function () {
    return view('book');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/service', function () {
    return view('service');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/login', [AuthController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('/hotels/{id}', [HotelController::class, 'show'])->name('hotels.show');
Route::get('/parks', [ParkController::class, 'index'])->name('parks.index');
Route::get('/parks/{id}', [ParkController::class, 'show'])->name('parks.show');
Route::get('/getCounties/{id}','MainController@getcounties');
// Route::get('/getCounties/{id}', 'MainController@getCounties');



Route::get('verify-email/{token}', [AuthController::class, 'verifyEmail'])->name('verify.email');
require __DIR__.'/auth.php';
