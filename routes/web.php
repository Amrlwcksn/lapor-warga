<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.store');

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function (Request $request) {
        return $request->user()->isAdmin()
            ? redirect()->route('admin.dashboard')
            : redirect()->route('warga.dashboard');
    })->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

    Route::get('/warga/dashboard', function () {
        return view('warga.dashboard');
    })->name('warga.dashboard');

    // Fitur laporan warga
    Route::resource('/warga/laporan', ReportController::class)
        ->only(['index', 'create', 'store', 'show', 'destroy'])
        ->parameters(['laporan' => 'report'])
        ->names('warga.reports');
});

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/reports/{report}', [DashboardController::class, 'showReport'])
            ->name('reports.show');

        Route::post('/reports/{report}', [DashboardController::class, 'updateReport'])
            ->name('reports.update');
    });
