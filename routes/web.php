<?php

use App\Models\Destination;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParkController;
use App\Http\Controllers\TourController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\API\BookingController;
use App\Http\Controllers\CountySeederController;

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

Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/nakuruparks', function () {
    return view('nakuruparks');
});
Route::get('/nairobiparks', function () {
    return view('nairobiparks');
});
Route::get('/nairobipark1', function () {
    return view('nairobipark1');
});
Route::get('/nairobipark2', function () {
    return view('nairobipark2');
});
Route::get('/nakuruhotels', function () {
    return view('nakuruhotels');
});
Route::get('/nakurusafaris', function () {
    return view('nakurusafaris');
});
Route::get('/nairobihotel', function () {
    return view('nairobihotel');
});
Route::get('/hotels', function () {
    return view('hotels');
});
Route::get('/bogoria', function () {
    return view('bogoria');
});
Route::get('/nakuru', function () {
    return view('nakuru');
});
Route::get('/nairobi', function () {
    return view('nairobi');
});
Route::get('/naivasha', function () {
    return view('naivasha');
});

Route::get('/book', function () {
    return view('book');
});
Route::get('/tours', function () {
    return view('tours');
});

Route::get('/park1', function () {
    return view('park1');
});
Route::get('/park2', function () {
    return view('park2');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/counties', function () {
    return view('counties');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/login', [AuthController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
// Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
// Route::get('/hotels/{id}', [HotelController::class, 'show'])->name('hotels.show');
Route::get('/parks', [ParkController::class, 'index'])->name('parks.index');
Route::get('/parks/{id}', [ParkController::class, 'show'])->name('parks.show');
Route::get('/getCounties/{id}','MainController@getcounties');
// Route::get('/home', [HomeController::class, 'index']);
// Route::get('/admin', 'AdminController@index')->name('admin.dashboard');




Route::get('verify-email/{token}', [AuthController::class, 'verifyEmail'])->name('verify.email');
require __DIR__.'/auth.php';


// routes/web.php

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/tours', function () {
    return view('tours');
})->name('tours');

Route::get('/book', function () {
    return view('book');
})->name('book');

Route::get('/users', function () {
    return view('users');
})->name('users');
Route::get('/tours', [TourController::class, 'index'])->name('tours');
// Route::get('/admin', [AdminController::class,'index'])->name('admin');

// Route::get('/tours', 'TourController@index')->name('tours.index');
// Route::get('/tours/create', 'TourController@create')->name('tours.create');
// Route::post('/tours', 'TourController@store')->name('tours.store');
// Route::get('/tours/{id}', 'TourController@show')->name('tours.show');
// Route::get('/tours/{id}/edit', 'TourController@edit')->name('tours.edit');
// Route::put('/tours/{id}', 'TourController@update')->name('tours.update');
// Route::delete('/tours/{id}', 'TourController@destroy')->name('tours.destroy');

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('countries', CountryController::class); // Example country routes
    // Route::resource('countries', CountryController::class); // Example country routes
    Route::resource('counties', CountyController::class);   // Example county routes
    Route::resource('parks', ParkController::class);    
    Route::get('/counties', [CountyController::class, 'admin'])->name('counties.admin');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::post('/counties', [AdminController::class, 'admin'])->name('admin');
    // Route::get('countries', [AdminController::class, 'countriesIndex'])->name('admin.countries.index');    // Example park routes
    // Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    // Route::get('countries', [AdminController::class, 'countiesIndex'])->name('admin.counties.index');   
});

// Route::group(['middleware' => ['auth:sanctum', 'role:manager']], function(){
//     Route::get('/manager/dashboard/profile', [ManagerProfileController::class, 'index'])->name('manager.dashboard.profile');
//     Route::post('/logout', [AuthController::class, 'logout']);});


 Route::post('/users', [UserController::class, 'create']);
Route::put('/users/{id}/role', [UserController::class, 'assignRole']);
Route::get('/users/{id}', [UserController::class, 'getUser']);

// Route::group(['middleware' => 'auth:sanctum'], function(){
//     Route::apiResource('profile', ProfileController::class);
// });


// Route::apiResource('users',AdminController::class);


