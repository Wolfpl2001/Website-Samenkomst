<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.submit');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth',])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');
});
Route::middleware(['admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
});

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admin/adduser', [AdminController::class, 'index'])->name('user.store');
    Route::post('/admin/users', [AdminController::class, 'store'])->name('users.store');
    Route::get('/admin/users/{user}/edit', [AdminController::class, 'edit'])->name('users.edit');
    Route::patch('/admin/users/{user}', [AdminController::class, 'update'])->name('users.update');
    Route::delete('/admin/users/{user}', [AdminController::class, 'destroy'])->name('users.destroy');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';