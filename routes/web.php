<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ProfileController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'loginpost'])->name('login');
    Route::post('/register', [AuthController::class, 'registerpost'])->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', [NotesController::class, 'index'])->name('notes');
    Route::get('/create', [NotesController::class, 'create'])->name('create');
    Route::post('/notes', [NotesController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [NotesController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [NotesController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [NotesController::class, 'destroy'])->name('destroy');
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
