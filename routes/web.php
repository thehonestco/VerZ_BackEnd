<?php

use App\Http\Controllers\Admin\CommunityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\StoreController as AdminStoreController;
use App\Http\Controllers\Store\DashboardController as StoreDashboardController;
use App\Http\Controllers\Admin\StoreAdminController;

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Superadmin
Route::middleware(['isSuperAdmin'])->group(function () {

    // Dashboard
    Route::get('/superadmin/dashboard', [AdminDashboardController::class, 'index'])->name('superadmin.dashboard');

    // Store
    Route::resource('/superadmin/store', AdminStoreController::class)->names('superadmin.store');
    Route::resource('/superadmin/store-admin', StoreAdminController::class)->names('superadmin.store-admin');
    Route::resource('/community', CommunityController::class)->names('superadmin.community');


});


Route::middleware(['isStore'])->group(function () {
    Route::get('/store/dashboard', [StoreDashboardController::class, 'index'])->name('store.dashboard');
});
