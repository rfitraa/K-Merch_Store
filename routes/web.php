<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    //Category
    Route::resource('/dashboard/category', CategoryController::class);

    //Product
    Route::resource('/dashboard/product', ProductController::class);

    //Tag
    Route::resource('/dashboard/tags', TagController::class);

    //Profile
    Route::resource('/dashboard/profile', UserController::class);
});

Auth::routes();

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/detail', 'detail');
    Route::get('/contact', 'contact');
});

Route::resource('/profile', UserController::class)->middleware('auth');


