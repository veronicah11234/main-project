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
use App\Models\User; // Make sure to use the correct namespace

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

// Route::get('/login', function () {
//     return view('login');
// });

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
Route::get('/nairobisafaris', function () {
    return view('nairobisafaris');
});
Route::get('/mombasasafaris', function () {
    return view('mombasasafaris');
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

Route::get('/admin/edit', function () {
    return view('admin/edit');
});

Route::get('/admin/users/edit', function () {
    return view('admin/users/edit');

});Route::get('/admin/users/usermanager', function () {
    return view('admin/users/usermanager');
});


Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

Route::get('/hotels', 'HotelController@index')->name('hotels.index');
Route::get('/hotels/{id}', 'HotelController@show')->name('hotels.show');
Route::get('/parks', [ParkController::class, 'index'])->name('parks.index');
Route::get('/parks/{id}', [ParkController::class, 'show'])->name('parks.show');
Route::get('/getCounties/{id}','MainController@getcounties');
// Route::get('/home', [HomeController::class, 'index']);
// Route::get('/admin', 'AdminController@index')->name('admin.dashboard');


Route::middleware(['auth','verified'])->group(function(){
    Route::get('/profile', [ProfileController::class,'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class,'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class,'destroy'])->name('profile.destroy');
});

Route::get('verify-email/{token}', [AuthController::class, 'verifyEmail'])->name('verify.email');
require __DIR__.'/auth.php';
Route ::get('/email/verify', function(){
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function(EmailVerificationRequest $request){
    $request->fulfill();
    return redirect('/profile');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::get('/email/verification-notification', function(Request $request){
    $request->user()->sendEmailVerification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
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

Route::get('/payment/index', function () {
    return view('payment/index');
})->name('book');

Route::get('/admin/users', function () {
    return view('admin/users');
})->name('users');


Route::get('profile', function () {
    $user = User::find(1); // Replace with the logic to fetch the user you want to display
    return view('admin.profile', compact('user'));
})->name('profile');


Route::get('/tours', [TourController::class, 'index'])->name('tours');


Route::get('/tours/create', [TourController::class, 'create'])->name('tours.create');
Route::post('/tours', [TourController::class, 'store'])->name('tours.store');

Route::get('/tours', [TourController::class, 'index'])->name('tours.index');
Route::get('/tours/{tour}', [TourController::class, 'show'])->name('tours.show');
Route::get('/tours/{tour}/edit', [TourController::class, 'edit'])->name('tours.edit');
Route::put('/tours/{tour}', [TourController::class, 'update'])->name('tours.update');
Route::delete('/tours/{tour}', [TourController::class, 'destroy'])->name('tours.destroy');

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    // Route::resource('countries', CountryController::class); // Example country routes
    Route::resource('parks', ParkController::class);    
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy'); 
Route::get('/profile', 'ProfileController@show')->name('profile.show');
Route::patch('/profile/update', 'ProfileController@update')->name('profile.update');

});
Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/admin/users/view/{id}', 'AdminController@viewUser')->name('admin.users.view');
Route::get('/admin/users/edit/{id}', 'AdminController@editUser')->name('admin.users.edit');
Route::put('/admin/users/update/{id}', 'AdminController@updateUser')->name('admin.users.update');
Route::get('/admin', 'AdminController@dashboard')->name('admin.dashboard');

 Route::post('/users', [UserController::class, 'create']);
Route::put('/users/{id}/role', [UserController::class, 'assignRole']);
Route::get('/users/{id}', [UserController::class, 'getUser']);



