<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;
use App\Http\Controllers\admin\ProfileController as AdminProfileController;
use App\Http\Controllers\manager\ProfileController as ManagerProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);
Route::post('/verify-email', [AuthController::class, 'verifyEmail']);

Route::post('/bookings', [BookingController::class, 'store']);



Route::group(['middleware' => ['auth:sanctum', 'role:user']], function(){
    Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('dashboard.profile');
    Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/delete-account', [AuthController::class, 'softDeleteAccount']);
});

Route::group(['middleware' => ['auth:sanctum', 'role:admin']], function(){
    Route::get('/admin/dashboard/profile', [AdminProfileController::class, 'index'])->name('admin.dashboard.profile');
    Route::post('/logout', [AuthController::class, 'logout']);});

Route::group(['middleware' => ['auth:sanctum', 'role:manager']], function(){
    Route::get('/manager/dashboard/profile', [ManagerProfileController::class, 'index'])->name('manager.dashboard.profile');
    Route::post('/logout', [AuthController::class, 'logout']);});


Route::post('/users', [UserController::class, 'create']);
Route::put('/users/{id}/role', [UserController::class, 'assignRole']);
Route::get('/users/{id}', [UserController::class, 'getUser']);


Route::apiResource('users',AdminController::class);

Route::get('/hotels', [HotelController::class, 'index']);
Route::get('/book', [HotelController::class, 'index']);
Route::get('/parks', [ParkController::class, 'index']);


