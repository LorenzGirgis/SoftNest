<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ProfileController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'loginpost'])->name('login');
    Route::post('/register', [AuthController::class, 'registerpost'])->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/over-ons', [ArticlesController::class, 'overons'])->name('over-ons');
    Route::get('/', [ArticlesController::class, 'index'])->name('articles');
    Route::get('/create', [ArticlesController::class, 'create'])->name('create');
    Route::post('/articles', [ArticlesController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ArticlesController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ArticlesController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [ArticlesController::class, 'destroy'])->name('destroy');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile/delete', [ProfileController::class, 'delete'])->name('profile.delete');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');
    Route::get('/password', [ProfileController::class, 'password'])->name('password');
    Route::put('/password/update', [ProfileController::class, 'updatePassword'])->name('password.update');
    Route::put('/photo/update', [ProfileController::class, 'updatePhoto'])->name('photo.update');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
});
