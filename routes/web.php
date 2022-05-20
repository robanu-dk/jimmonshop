<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StakeholderController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\EventDashboardController;
use App\Http\Controllers\ProductDashboardController;
use App\Http\Controllers\CategoryDashboardController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'index']);

Route::get('/about+us', [StakeholderController::class,'index']);

Route::get('/about+us/{stakeholder:slug}', [StakeholderController::class,'show']);

Route::get('/contact+us', function() {
    return view('contactUs', [
        'title' => 'Contact Us'
    ]);
});

Route::resource('/events', EventController::class);

Route::resource('/products', ProductController::class);

Route::get('/products/category/{kategori:slug}', [KategoriController::class,'show']);

Route::get('/sign+in',[SigninController::class,'index'])->name('login')->middleware('guest');

Route::post('/sign+in',[SigninController::class,'authenticate']);

Route::post('/logout',[SigninController::class,'logout']);

Route::get('/registration',[RegistrationController::class,'index']);

Route::post('/registration',[RegistrationController::class,'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/categories/create', [CategoryDashboardController::class,'create']);

Route::get('/dashboard/categories/{kategori:slug}', [CategoryDashboardController::class,'show']);

Route::get('/dashboard/categories/{kategori}/edit', [CategoryDashboardController::class,'edit']);

Route::post('/dashboard/categories', [CategoryDashboardController::class,'store']);

Route::delete('/dashboard/categories/{kategori:slug}', [CategoryDashboardController::class,'destroy']);

Route::put('/dashboard/categories/{kategori:slug}', [CategoryDashboardController::class,'update']);

Route::resource('/dashboard/categories', CategoryDashboardController::class);

Route::resource('/dashboard/products', ProductDashboardController::class);

Route::resource('/dashboard/events', EventDashboardController::class);
