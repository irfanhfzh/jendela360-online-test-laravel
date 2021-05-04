<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminCustomerController;
use App\Http\Controllers\admin\AdminDataMobilController;
use App\Http\Controllers\admin\AdminManualOrderController;
use App\Http\Controllers\admin\AdminOrderController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\index\HomeController;
use Illuminate\Support\Facades\Route;

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

// Auth Route
// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
// Logout
Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

// Admin Route
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'ceklevel:1']], function () {
    // Menu Dashboard
    Route::get('/', [AdminController::class, 'index'])->name('admin');    
    // Menu Customers
    Route::prefix('customers')->group(function () {
        Route::get('/', [AdminCustomerController::class, 'index'])->name('admin.customers');
        // Delete Data Mobil
        Route::get('/delete/{id}', [AdminCustomerController::class, 'delete']);
    });
    // Menu Data Mobil
    Route::prefix('data-mobil')->group(function () {
        Route::get('/', [AdminDataMobilController::class, 'index'])->name('admin.data-mobil');
        // Insert Data Mobil
        Route::get('/insert-data-mobil', [AdminDataMobilController::class, 'insert'])->name('admin.data-mobil-insert');
        Route::post('/insert-data-mobil', [AdminDataMobilController::class, 'insertAction']);
        // Edit Data Mobil
        Route::get('/edit-data-mobil/{id}', [AdminDataMobilController::class, 'edit']);
        Route::post('/edit-data-mobil', [AdminDataMobilController::class, 'editAction'])->name('admin.data-mobil-edit');
        // Delete Data Mobil
        Route::get('/delete/{id}', [AdminDataMobilController::class, 'delete']);
    });
    // Menu Orders
    Route::prefix('manual-orders')->group(function () {
        Route::get('/', [AdminManualOrderController::class, 'index'])->name('admin.manual-orders');
        // Insert Data Mobil
        Route::get('/insert-manual-orders', [AdminManualOrderController::class, 'insert'])->name('admin.manual-orders-insert');
        Route::post('/insert-manual-orders', [AdminManualOrderController::class, 'insertAction']);
        // Edit Data Mobil
        Route::get('/edit-manual-orders/{id}', [AdminManualOrderController::class, 'edit']);
        Route::post('/edit-manual-orders', [AdminManualOrderController::class, 'editAction'])->name('admin.manual-orders-edit');
        // Delete Data Mobil
        Route::get('/delete/{id}', [AdminManualOrderController::class, 'delete']);
    });
});

// Menu Laravel Version
Route::get('/laravel-version', function () {
    return view('laravel');
})->name('laravel-version');

// Index Route
Route::get('/', [HomeController::class, 'index'])->name('home');
