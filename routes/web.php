<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufacturerController;

// Route to display the list of cars
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');

// Routes for managing manufacturers
Route::get('/manufacturers', [ManufacturerController::class, 'index'])->name('manufacturers.index');
// Add more routes for creating, editing, and deleting manufacturers as needed
// Add other routes as needed for your application
// For example, you might want to add a dashboard route
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Set the default route to redirect to /cars
Route::redirect('/', '/cars');

