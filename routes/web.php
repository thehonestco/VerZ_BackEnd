<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Store\DashboardController as StoreDashboardController;

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Superadmin
Route::middleware(['isSuperAdmin'])->group(function () {
    Route::get('/superadmin/dashboard', [AdminDashboardController::class, 'index'])->name('superadmin.dashboard');
    
});


Route::middleware(['isStore'])->group(function () {
    Route::get('/store/dashboard', [StoreDashboardController::class, 'index'])->name('store.dashboard');
});
