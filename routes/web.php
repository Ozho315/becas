<?php

use App\Http\Controllers\Admin\ProfessorController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MajorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScholarshipApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes for Admin and Professor
    Route::middleware('role:admin|professor')->group(function () {
        Route::resource('students', StudentController::class)->only(['index', 'show']);
    });

    // Routes for Admin
    Route::prefix('admin')->middleware('role:admin')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('professors', ProfessorController::class);
        Route::resource('students', StudentController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
        Route::resource('majors', MajorController::class);
    });

    // Routes for Professor and Student
    Route::resource('scholarship-applications', ScholarshipApplicationController::class);


    // Routes for Professor
    Route::prefix('professor')->middleware('role:professor')->group(function () {
    });

    // Routes for Student
    Route::prefix('student')->middleware('role:student')->group(function () {
        //
    });
});

require __DIR__ . '/auth.php';
