<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {
    return redirect()->route('groups.index');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('groups', GroupController::class);
    
    Route::prefix('groups/{group}')->group(function () {
        Route::get('/students/create', [StudentController::class, 'create'])->name('groups.students.create');
        Route::post('/students', [StudentController::class, 'store'])->name('groups.students.store');
        Route::get('/students/{student}', [StudentController::class, 'show'])->name('groups.students.show');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
