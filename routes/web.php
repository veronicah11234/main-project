<?php

use App\Models\Destination;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth;
use App\Models\Admin; // Add this line to import the Admin model



use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\API\BookingController;
use App\Models\User; // Make sure to use the correct namespace
// use App\Models\Tour; // Make sure to use the correct namespace

use Illuminate\Support\Facades\Session; // Import the Session class
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TourController;



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

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact'); 

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
Route::get('/naroksafaris', function () {
    return view('naroksafaris');
});
Route::get('/malindisafaris', function () {
    return view('malindisafaris');
});
Route::get('/malindihotel', function () {
    return view('malindihotel');
});
Route::get('/mombasahotel', function () {
    return view('mombasahotel');
});
Route::get('/narokhotel', function () {
    return view('narokhotel');
});
Route::get('/mombasaparks', function () {
    return view('mombasaparks');
});
Route::get('/malindiparks', function () {
    return view('malindiparks');
});
Route::get('/narokparks', function () {
    return view('narokparks');
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
Route::get('/tours/edit', function () {
    return view('tours/edit');
});

Route::get('/park1', function () {
    return view('park1');
});
Route::get('/park2', function () {
    return view('park2');
});
Route::get('/park3', function () {
    return view('park3');
});
Route::get('/park4', function () {
    return view('park4');
});
Route::get('/park6', function () {
    return view('park6');
});
Route::get('/park7', function () {
    return view('park7');
});
Route::get('/park8', function () {
    return view('park8');
});

Route::get('/addToCart', function () {
    return view('addToCart');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/logout', function () {
    // Auth::logout();
    return redirect('/register');
});

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/admin/edit', function () {
    return view('admin/edit');
});

Route::get('/tours/index', function () {
    return view('tours/index');
})->name('tours');

Route::get('/admin/addtour', function () {
    return view('admin/edit');
})->name('addtour');

Route::get('/tours/create', function () {
    return view('tours/create');
})->name('tours');
Route::get('/tours/store', function () {
    return view('tours/store');
})->name('tours');
Route::get('/tours/show', function () {
    return view('tours/show');
})->name('tours');


Route::get('/book', function () {
    return view('book');
})->name('book');

Route::get('/mpesa-reciept', function () {
    return view('mpesa_reciept');
})->name('mpesa-reciept');

Route::get('/paypal-reciept', function () {
    return view('paypal_reciept');
})->name('paypal-reciept');

Route::get('/admin/users', function () {
    return view('admin/users');
})->name('users');

Route::get('/nakuruparks/{tourId}', [TourController::class, 'showNakuruParks']);

Route::get('show_tour/{id}', [DashboardController::class, 'show'])->name('admin.show_tour');



// routes/web.php


// Define the route group for admin-related routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    // Add a route for the edit tour view
    Route::get('admin/edit_tour/{id?}', [DashboardController::class,'edit'])->name('admin.edit_tour_view');
    Route::get('show_tour/{id}', [DashboardController::class, 'show'])->name('admin.show_tour');
    Route::get('edit/{id}', [DashboardController::class, 'edit'])->name('admin.edit');
    Route::delete('admin/destroy/{id}', [DashboardController::class, 'destroy'])->name('admin.destroy');



    
});
// Route::post('/admin/addtour', [DashboardController::class,'addTour'])->name('add_tour');

// Route for logging out
Route::get('/admin/logout', [DashboardController::class, 'logout'])->name('admin.logout');

Route::middleware(['admin'])->group(function () {
    // Define your admin routes here
    Route::get('/admin', [AdminController::class, 'admindashboard'])->name('admin.dashboard'); // Admin dashboard

    Route::get('/admin/addbooking', function () {
        return view('admin.addbooking'); // Display the Add Booking form
    })->name('admin.addbooking');

    Route::get('/admin/addtour', function () {
        return view('admin/addtour'); // Display the Add Tour form
    })->name('add_tour');


    // Route::get('/admindashboard', function () {
    //     return view('admindashboard');
    // })->name('admindashboard');
    // Add other admin routes as needed

    Route::get('/admin/edit_tour/{id}', [DashboardController::class, 'editTour'])->name('edit_tour');
    Route::post('/admin/update_tour/{id}', [DashboardController::class, 'updateTour'])->name('update_tour');
    Route::get('/admin/delete_tour/{id}', [DashboardController::class, 'deleteTour'])->name('delete_tour');

    Route::get('/profile', [ProfileController::class,'show'])->name('profile.show')->middleware('auth');
Route::get('/profile/edit', [ProfileController::class,'edit'])->name('profile.edit')->middleware('auth');
Route::put('/profile', [ProfileController::class,'update'])->name('profile.update')->middleware('auth');
Route::get('/admin', [AdminController::class,'index'])->name('admin.index');

// routes/web.php

Route::get('/profile', [UserController::class,'profile'])->name('profile');


    Route::get('/admin/logout', [DashboardController::class, 'logout'])->middleware('auth');
    Route::post('/admin/logout', [DashboardController::class, 'logout'])->name('admin.logout');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/', [HomeController::class, 'index']); // Replace HomeController::class with the appropriate controller for your home page
});
Route::middleware(['admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin.dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    // Define your admin dashboard route here
    Route::get('/admin/dashboard/logout', [AdminController::class,'logout'])->name('admin.dashboard.logout');
});


Route::middleware(['auth', 'admin'])->group(function () {
    // Define your admin routes here
    Route::get('/admin', [AdminController::class, 'index']); // Example admin route
    Route::get('/admin/addtour', [DashboardController::class, 'add_tour'])->name('admin.addtour');
    Route::match(['GET', 'POST'], '/addtour', [DashboardController::class, 'addtour'])->name('addtour');
    Route::match(['GET', 'POST'], '/addbooking', [BookingController::class, 'addbooking'])->name('addbooking');


    Route::get('/admin/addbooking', [BookingController::class, 'addbooking'])->name('add_booking');
    Route::post('/admin/addbooking', [BookingController::class, 'addbooking'])->name('add_booking');

        Route::get('/admin/addtour', [DashboardController::class, 'add_tour'])->name('admin.addtour');



    Route::get('/admin/edit_tour/{id}', [DashboardController::class, 'editTour'])->name('edit_tour');
    Route::post('/admin/update_tour/{id}', [DashboardController::class, 'updateTour'])->name('update_tour');
    Route::get('/admin/delete_tour/{id}', [DashboardController::class, 'deleteTour'])->name('delete_tour');

    // Add a route for the admin dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Remove the AutoLogout middleware from these routes
    Route::get('/admin/logout', [DashboardController::class, 'logout'])->middleware('auth');
    Route::post('/admin/logout', [DashboardController::class, 'logout'])->name('admin.logout');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Define other admin routes as needed
});

Route::get('/tours/index', function () {
    return view('tours/index');
})->name('tours');
Route::middleware(['auth'])->group(function () {
    
    Route::post('tours/edit', [TourController::class, 'edit'])->name('tours.edit');

    Route::get('/cart/{tourId}', [TourController::class, 'Cart'])->name('tours.cart');  
      Route::resource('tours', TourController::class);
});

Route::get('/tours', [TourController::class, 'index'])->name('tours.index');



Route::get('/admin/users/edit', function () {
    return view('admin/users/edit');

});

Route::get('/addtour', [DashboardController::class, 'add_tour'])->name('add_tour');
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
// Edit a tour
Route::get('/admin/edit_tour/{id}', [DashboardController::class, 'edit'])->name('edit_tour');
Route::put('/admin/update_tour/{id}', [DashboardController::class, 'update'])->name('update_tour');
Route::delete('/admin/delete_tour/{id}', [DashboardController::class, 'destroy'])->name('delete_tour');

Route::get('/tours', [TourController::class, 'index'])->name('tour.index');


// Other DashboardController routes

// Route::post('/tours', [TourController::class, 'store'])->name('tours.store');
// Route::get('/cart/{id}', [TourController::class, 'cart'])->name('tours.cart');
Route::get('/admin/index', [TourController::class, 'index'])->name('admin.index');
Route::get('/tours/{tours}', [TourController::class, 'show'])->name('tours.show');
Route::get('/tours/create', [TourController::class, 'create'])->name('tours.create');
Route::get('/tour/edit', [TourController::class, 'edit'])->name('tours.edit');
Route::put('/tours/{tours}', [TourController::class, 'update'])->name('tours.update');
Route::post('/admin', [TourController::class, 'store'])->name('admin.store');
Route::delete('/tours/{tours}',[TourController::class, 'destroy'])->name('tours.destroy');
Route::post('/parks', 'ParkController@store')->name('parks.store');

Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');


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




Route::get('profile', function () {
    $user = User::find(1); // Replace with the logic to fetch the user you want to display
    return view('admin.profile', compact('user'));
})->name('profile');
Route::middleware(['auth'])->group(function () {
});

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/admin', [AdminController::class,'index'])->name('admin.index');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/tours', [UserController::class, 'store'])->name('admin.tours.store');
    Route::get('/admin/tours/index', [AdminTourController::class, 'index'])->name('admin.tours.index');
    Route::get('/admin/tours/create', [AdminTourController::class, 'create'])->name('admin.tours.create');
    Route::post('/admin/tours', [AdminTourController::class, 'store'])->name('admin.tours.store');
    Route::get('/admin/tours/{tour}/edit', [AdminTourController::class, 'edit'])->name('admin.tours.edit');
    Route::put('/admin/tours/{tour}', [AdminTourController::class, 'update'])->name('admin.tours.update');
    Route::delete('/admin/tours/{tour}', [AdminTourController::class, 'destroy'])->name('admin.tours.destroy');

Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy'); 
Route::get('/profile', [ProfileController::class,'show'])->name('profile.show');
Route::patch('/profile/update', [ProfileController::class,'update'])->name('profile.update');

});
Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/admin/users/view/{id}', [AdminController::class,'viewUser'])->name('admin.users.view');
Route::get('/admin/users/edit/{id}', [AdminController::class,'editUser'])->name('admin.users.edit');
Route::put('/admin/users/update/{id}', [AdminController::class,'updateUser'])->name('admin.users.update');
Route::get('/admin', [AdminController::class,'dashboard'])->name('admin.dashboard');

 Route::post('/users', [UserController::class, 'create']);
Route::put('/users/{id}/role', [UserController::class, 'assignRole']);
Route::get('/users/{id}', [UserController::class, 'getUser']);

Route::get('/dashboard.addtour', function () {
    return view('dashboard.addtour');
})->name('dashboard.addtour');
Route::post('/addtour', [TourController::class, 'addtour'])->name('addtour');
Route::post('/logout',function(){

        // Auth::logout();
        Session::flush();
        return redirect('home');


});

Route ::get('/logout', function(){
    return view('home');
})->middleware('auth')->name('logout');


Route::group(['middleware' => ['auth:sanctum', 'role:user']], function(){
    Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('dashboard.profile');
    Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/delete-account', [AuthController::class, 'softDeleteAccount']);
});


Route::group(['middleware' => ['auth:sanctum', 'role:admin']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});
