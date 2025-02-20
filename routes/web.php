<?php

use App\Http\Middleware\Admin;
use App\Http\Controllers\dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.submit');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/welcome',[dashboard::class, 'loadDashboard'])->name('dashboard');
});
// Route::middleware(['admin'])->group(function () {
//     Route::get('/admin', function () {
//         return view('admin');
//     })->name('admin');
// });

Route::middleware(['auth', 'CheckAdmin'])->group(function () {
    Route::get('/admin/adduser', [AdminController::class, 'index'])->name('admin.adduser');
    Route::post('/admin/adduser', [AdminController::class, 'store'])->name('user.store'); // ✅ Staat deze erin?
    Route::get('/admin/{user}/edit', [AdminController::class, 'edit'])->name('user.edit');
    Route::patch('/admin/adduser/{user}', [AdminController::class, 'update'])->name('user.update');
    Route::delete('/admin/adduser/{user}', [AdminController::class, 'destroy'])->name('user.destroy');
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