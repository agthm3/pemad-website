<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
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



Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/manage-order', [DashboardController::class, 'manage_order'])->name('dashboard.manageorder');

Route::get('/service-list', [ServiceController::class, 'index'])->name('dashboard.servicelist');
Route::get('/add-service', [ServiceController::class, 'create'])->name('service.add');
Route::get('/detail-service', [ServiceController::class, 'show'])->name('service.show');
Route::get('/service-edit', [ServiceController::class, 'edit'])->name('service.edit');


Route::get('/your-order', [OrderController::class,'index'])->name('yourorder.index');
Route::get('/show-order', [OrderController::class, 'show'])->name('order.show');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/', [DashboardController::class], 'index')->name('dashboard.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
