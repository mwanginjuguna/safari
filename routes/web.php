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

Route::view('/', 'welcome')->name('home');
Route::view('/about', 'about-us')->name('about');
Route::view('/menus', 'menus')->name('menu.index');
Route::view('/menu/view', 'menus.show')->name('menu.show');
Route::view('/faq', 'faq')->name('faq');
Route::view('/locations', 'locations')->name('locations');
Route::view('/cart', 'cart')->name('cart');
Route::view('/wishlist', 'wishlist')->name('wishlist');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
