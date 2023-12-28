<?php

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

/*Front Page*/
Route::get('/', function () {
    return view('YearnArt.Home');
});

Route::get('/About', function () {
    return view('YearnArt.About');
});

require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/FAQ', function () {
    return view('YearnArt.FAQ');
})->name('FAQ');

Route::get('/Products', function () {
    return view('YearnArt.Products');
})->name('Products');

Route::get('/About', function () {
    return view('YearnArt.About');
})->name('About');

Route::get('/MyOrders', function () {
    return view('YearnArt.MyOrders');
})->name('MyOrders');

