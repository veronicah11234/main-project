<?php

use App\Models\Destination;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth;


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

Route::get('/admindashboard', function () {
    return view('admindashboard');
})->name('admindashboard');

// routes/web.php

Route::middleware(['auth', 'role:admin'])->group(function () {
    // Define your admin dashboard route here
    Route::get('/admin/dashboard/logout', [AdminController::class,'logout'])->name('admin.dashboard.logout');
});


// Route for adding a tour (assuming you have an 'addtour' view and controller method)
Route::get('/admin/addtour', function () {
    return view('admin.addtour'); // Use 'admin.addtour' as the view name
})->name('admin.addtour');

Route::get('/admin/addbooking', function () {
    return view('admin.addbooking'); // Use 'admin.addtour' as the view name
})->name('admin.addbooking');


Route::get('/admin/edit', [DashboardController::class,'edit'])->name('edit');
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
        return view('admin.addtour'); // Display the Add Tour form
    })->name('admin.addtour');

    // Add other admin routes as needed

    Route::get('/admin/edit_tour/{id}', [DashboardController::class, 'editTour'])->name('edit_tour');
    Route::post('/admin/update_tour/{id}', [DashboardController::class, 'updateTour'])->name('update_tour');
    Route::get('/admin/delete_tour/{id}', [DashboardController::class, 'deleteTour'])->name('delete_tour');

    Route::get('/admin/logout', [DashboardController::class, 'logout'])->middleware('auth');
    Route::post('/admin/logout', [DashboardController::class, 'logout'])->name('admin.logout');
    Route::post('/logout', [Auth\LoginController::class, 'logout'])->name('logout');

    Route::get('/', [HomeController::class, 'index']); // Replace HomeController::class with the appropriate controller for your home page
});
Route::middleware(['admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin.dashboard');
});




Route::middleware(['auth', 'admin'])->group(function () {
    // Define your admin routes here
    Route::get('/admin', [AdminController::class, 'index']); // Example admin route
    Route::get('/admin/addtour', [DashboardController::class, 'addtour'])->name('add_tour');
    Route::get('/admin/addbooking', [BookingController::class, 'addbooking'])->name('add_booking');


    Route::get('/admin/edit_tour/{id}', [DashboardController::class, 'editTour'])->name('edit_tour');
    Route::post('/admin/update_tour/{id}', [DashboardController::class, 'updateTour'])->name('update_tour');
    Route::get('/admin/delete_tour/{id}', [DashboardController::class, 'deleteTour'])->name('delete_tour');

    // Add a route for the admin dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Remove the AutoLogout middleware from these routes
    Route::get('/admin/logout', [DashboardController::class, 'logout'])->middleware('auth');
    Route::post('/admin/logout', [DashboardController::class, 'logout'])->name('admin.logout');
    Route::post('/logout', [Auth\LoginController::class, 'logout'])->name('logout');

    // Define other admin routes as needed
});






// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/', function () {
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

Route::get('/nakuruparks/{tourId}', [TourController::class, 'showNakuruParks']);


Route::match(['get', 'post'], '/cart', [TourController::class, 'cart'])->name('tours.cart');
Route::post('/cart', [TourController::class, 'addToCart'])->name('tours.addToCart');
Route::get('/tours/index', function () {
    return view('tours/index');
})->name('tours');
Route::get('/cart/{tourId}', [TourController::class, 'Cart'])->name('tours.cart');
Route::middleware(['auth'])->group(function () {
    Route::match(['get', 'post'], '/cart', [TourController::class, 'cart'])->name('tours.cart');
    Route::post('/cart', [TourController::class, 'addToCart'])->name('tours.addToCart');
    // Route::get('/cart', 'CartController@index')->name('cart.index');
    Route::get('/cart', [CartController::class, 'addToCart'])->name('cart.addToCart');
    Route::post('tours/edit', [TourController::class, 'edit'])->name('tours.edit');

    Route::get('/cart/{tourId}', [TourController::class, 'Cart'])->name('tours.cart');  
      Route::resource('tours', TourController::class);
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
    return redirect('/login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/admin/edit', function () {
    return view('admin/edit');
});


// Route::get('/admin/tours', function () {
//     return view('admin/tours');
// });
Route::get('/tours', [TourController::class, 'index'])->name('tours.index');



Route::get('/admin/users/edit', function () {
    return view('admin/users/edit');

});Route::get('/admin/users/usermanager', function () {
    return view('admin/users/usermanager');
});

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');


Route::get('/tours/index', function () {
    return view('tours/index');
})->name('tours');

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
// Route::get('/addtour', [DashboardController::class, 'add_tour'])->name('add_tour');
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
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

Route::get('/hotels', 'HotelController@index')->name('hotels.index');
Route::get('/hotels/{id}', 'HotelController@show')->name('hotels.show');
Route::get('/parks', [ParkController::class, 'index'])->name('parks.index');
Route::get('/parks/{id}', [ParkController::class, 'show'])->name('parks.show');
Route::get('/getCounties/{id}','MainController@getcounties');
// Route::get('/home', [HomeController::class, 'index']);
// Route::get('/admin', 'AdminController@index')->name('admin.dashboard');


Route::middleware(['auth','verified'])->group(function(){
    Route::get('/profile', 'DashboardController@index')->name('profile.index');
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




Route::get('profile', function () {
    $user = User::find(1); // Replace with the logic to fetch the user you want to display
    return view('admin.profile', compact('user'));
})->name('profile');
Route::middleware(['auth'])->group(function () {
    // Route::get('/profile', 'DashboardController@index')->name('profile.index');
});

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/admin', [AdminController::class,'index'])->name('admin.index');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

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
Route::get('/profile', 'ProfileController@show')->name('profile.show');
Route::patch('/profile/update', 'ProfileController@update')->name('profile.update');

});
Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/admin/users/view/{id}', [AdminController::class,'viewUser'])->name('admin.users.view');
Route::get('/admin/users/edit/{id}', [AdminController::class,'editUser'])->name('admin.users.edit');
Route::put('/admin/users/update/{id}', [AdminController::class,'updateUser'])->name('admin.users.update');
Route::get('/admin', [AdminController::class,'dashboard'])->name('admin.dashboard');

 Route::post('/users', [UserController::class, 'create']);
Route::put('/users/{id}/role', [UserController::class, 'assignRole']);
Route::get('/users/{id}', [UserController::class, 'getUser']);



Route::get('/payment/index', [PaymentController::class, 'index'])->name('payments.index');


Route::get('/payment/create', [PaymentController::class, 'create'])->name('payments.create');
Route::post('/payment', [PaymentController::class, 'store'])->name('payments.store');

Route::get('/payment', [PaymentController::class, 'index'])->name('payments.index');
Route::get('/payment/{payment}', [PaymentController::class, 'show'])->name('payments.show');
Route::get('/payment/{payment}/edit', [PaymentController::class, 'edit'])->name('payments.edit');
Route::put('/payment/{payment}', [PaymentController::class, 'update'])->name('payments.update');
Route::delete('/payment/{payment}', [PaymentController::class, 'destroy'])->name('payments.destroy');

// routes/web.php

Route::get('/dashboard/cart', [DashboardController::class,'cart'])->name('dashboard.cart');
Route::get('/dashboard/checkout', [DashboardController::class,'checkout'])->name('dashboard.checkout');
Route::post('/dashboard/addToCart/{tour}', [DashboardController::class,'addToCart'])->name('dashboard.addToCart');
Route::post('/dashboard/updateCart/{item}', [DashboardController::class,'updateCart'])->name('dashboard.updateCart');
Route::post('/dashboard/removeFromCart/{item}', [DashboardController::class,'removeFromCart'])->name('dashboard.removeFromCart');





// Route::get('/admin', function () {
//     if(session()->has('name') ){
//         if(Session::get('name')['rank']=="admin"){
//             $collection = DB::table('users')->where('role', 'admin')->get();
//             $array = $collection->pluck('name');

//             //$waiters = DB::table('active_waiters')->get();
//             $collection2 = DB::table('add_tours')->get();
//             $array1 = $collection2->pluck('name');

//             $v=$array->toArray();
//             $vv=$array1->toArray();

//             $result=array_intersect($v,$vv);
//             $result2=array_diff($v, $vv);

//         return view('admin', compact('result','result2'));
//         }
//         else{
//             return redirect ('login');
//         }

//     }
//     else{
//         return redirect ('login');
//     }


// });

// Route::get('/dashboard.addtour', function () {
//     return view('dashboard.addtour');
// })->name('dashboard.addtour');
Route::post('/addtour', [DashboardController::class, 'add_tour'])->name('add_tour');
Route::post('/logout',function(){

        // Auth::logout();
        Session::flush();
        return redirect('login');


});



Route::group(['middleware' => ['auth:sanctum', 'role:user']], function(){
    Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('dashboard.profile');
    Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/delete-account', [AuthController::class, 'softDeleteAccount']);
});


Route::group(['middleware' => ['auth:sanctum', 'role:admin']], function(){
    Route::get('/admin/dashboard/addtour', [AdminController::class, 'index'])->name('admin.dashboard.profile');
    Route::get('/admin/addtour', [DashboardController::class, 'add_tour'])->name('admin.addtour');
    

    Route::post('/logout', [AuthController::class, 'logout']);});