<?php

use Illuminate\Support\Facades\{Route, Auth};
use App\Http\Controllers\{
    HomeController,
    UserController,
    RoleController,
    PermissionController,
    DashboardController
};

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');


// Admin Routes
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/superadmin', [DashboardController::class, 'superadmin'])->name('dashboard.superadmin')->middleware('role:superadmin');
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin')->middleware('role:admin');
    Route::get('/dashboard/user', [DashboardController::class, 'user'])->name('dashboard.user')->middleware('role:user');


    
    // Resource Routes
    Route::resources([
        'roles' => RoleController::class,
        'permissions' => PermissionController::class,
        'users' => UserController::class
    ]);

 
});