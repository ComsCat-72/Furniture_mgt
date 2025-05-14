<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\AuthController;

// Public Routes (accessible to everyone)
Route::get('/', function () {
    // If user is logged in, redirect to home
    if (auth()->check()) {
        return redirect()->route('home');
    }
    // Otherwise show welcome page
    return view('welcome');
});

// Guest Routes (Only accessible when NOT logged in)
Route::middleware(['guest'])->group(function () {
    // Authentication Routes
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

// Protected Routes (Only accessible when logged in)
Route::middleware(['auth'])->group(function () {
    // Logout route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Home route
    Route::get('/home', function() {
        return view('home');
    })->name('home');

    // Furniture Management Routes
    Route::prefix('furniture')->group(function () {
        Route::get("/add", function () {
            return view('add_furniture/index');
        })->name('add_page');

        Route::get("/all", [FurnitureController::class, "all_furniture"])
            ->name("all_furniture");

        Route::post('/create', [FurnitureController::class, 'createFurniture'])
            ->name("add");

        Route::post('/update/{id?}', [FurnitureController::class, 'update_furniture'])
            ->name("update_furniture");

        Route::get("/update-form/{FurnitureId}", [FurnitureController::class, 'updateForm'])
            ->name("update_form");

        Route::post("/delete/{FurnitureId?}", [FurnitureController::class, "deleteFurniture"])
            ->name("delete_furniture");
    });

    Route::get('/furniture/report', [FurnitureController::class, 'generateReport'])->name('furniture.report');
});