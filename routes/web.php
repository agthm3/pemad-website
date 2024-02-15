<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderpendingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Models\Orderpending;
use Illuminate\Support\Facades\Auth;
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





// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/', [DashboardController::class], 'index')->name('dashboard.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/manage-order', [DashboardController::class, 'manage_order'])->name('dashboard.manageorder');

    Route::get('/service-list', [ServiceController::class, 'index'])->name('dashboard.servicelist');
    Route::get('/add-service', [ServiceController::class, 'create'])->name('service.add');
    Route::post('/add-service', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/detail-service/{service}', [ServiceController::class, 'show'])->name('service.show');
    Route::get('/service-edit', [ServiceController::class, 'edit'])->name('service.edit');
    Route::delete('/service-edit/{service}', [ServiceController::class, 'destroy'])->name('service.destroy');


    Route::get('/service-show/home/{service}', [OrderController::class, 'show'])->name('order.home.show');
    Route::post('/order-pending', [OrderController::class, 'store'])->name('order.store');
    Route::get('/your-order', [OrderController::class,'index'])->name('yourorder.index');
    Route::get('/show-order', [OrderController::class, 'show'])->name('order.show');
});

require __DIR__.'/auth.php';
