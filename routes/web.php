<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SupplierController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
->middleware('auth')
->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('suppliers/trash', [SupplierController::class, 'trash'])
    ->name('suppliers.trash');
    
    Route::patch('suppliers/{id}/restore', [SupplierController::class, 'restore'])
    ->name('suppliers.restore');
    
    Route::delete('suppliers/{id}/force-delete', [SupplierController::class, 'forceDelete'])
    ->name('suppliers.force-delete');
    
    Route::resource('suppliers', SupplierController::class);
   
    Route::resource('products', ProductController::class);
});

Route::resource('categories', CategoryController::class)
    ->middleware('auth');

require __DIR__.'/auth.php';
