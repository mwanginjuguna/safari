<?php

use App\Models\Branch;
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

    /**
     * Needed components for backend dev.
     * 
     * Database - migrations and models
     * - users - include role column on users table for admin
     * - locations or branches table - The restaurant can have different/many branches
     * - Each branch will have menus - e.g. breakfast menu, dinner, beverages, alcoholic, coffee menu, etc.
     * - A menu has many dishes
     * - A dish has many items/products
    */

Route::get('/factory', function () {
    $result = Branch::factory()->make();
    dd($result);
});

require __DIR__.'/auth.php';
