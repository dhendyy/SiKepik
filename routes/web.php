<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\BengkelController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MobilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('home', function () {
    return view('home');
});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('registrasi', function () {
    return view('registrasi');
})->name('registrasi');   

Route::get('layout', function () {
    return view('layout');
});
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
Route::prefix('admin')->group(function () {
    Route::get('drivers', [DriverController::class, 'index'])->name('admin.drivers.index');
    Route::get('drivers/create', [DriverController::class, 'create'])->name('admin.drivers.create');
    Route::post('drivers', [DriverController::class, 'store'])->name('admin.drivers.store');
    Route::get('drivers/{driver}/edit', [DriverController::class, 'edit'])->name('admin.drivers.edit');
    Route::put('drivers/{driver}', [DriverController::class, 'update'])->name('admin.drivers.update');
    Route::delete('drivers/{driver}', [DriverController::class, 'destroy'])->name('admin.drivers.destroy');
});
Route::prefix('admin')->group(function () {
    Route::get('users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
});
Route::prefix('admin')->group(function () {
    Route::get('bengkels', [BengkelController::class, 'index'])->name('admin.bengkels.index');
    Route::get('bengkels/create', [BengkelController::class, 'create'])->name('admin.bengkels.create');
    Route::post('bengkels', [BengkelController::class, 'store'])->name('admin.bengkels.store');
    Route::get('bengkels/{bengkel}/edit', [BengkelController::class, 'edit'])->name('admin.bengkels.edit');
    Route::put('bengkels/{bengkel}', [BengkelController::class, 'update'])->name('admin.bengkels.update');
    Route::delete('bengkels/{bengkel}', [BengkelController::class, 'destroy'])->name('admin.bengkels.destroy');
});
Route::prefix('admin')->group(function () {
    Route::get('categorys', [CategoryController::class, 'index'])->name('admin.categorys.index');
    Route::get('categorys/create', [CategoryController::class, 'create'])->name('admin.categorys.create');
    Route::post('categorys', [CategoryController::class, 'store'])->name('admin.categorys.store');
    Route::get('categorys/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categorys.edit');
    Route::put('categorys/{category}', [CategoryController::class, 'update'])->name('admin.categorys.update');
    Route::delete('categorys/{category}', [CategoryController::class, 'destroy'])->name('admin.categorys.destroy');
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('mobil', MobilController::class);
});

