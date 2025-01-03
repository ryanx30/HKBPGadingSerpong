<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JemaatController; // Tambahkan controller jemaat di sini

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// Rute untuk manajemen pengguna
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
Route::delete('/admin/users/{id}', [AdminController::class, 'destroy'])->name('admin.users.destroy');

// Event Management
Route::get('/admin/events', [AdminController::class, 'events'])->name('admin.events');
Route::get('/admin/events/create', [AdminController::class, 'create'])->name('admin.events.create');
Route::get('/admin/events/{id}/edit', [AdminController::class, 'edit'])->name('admin.events.edit');
Route::put('/admin/events/{id}', [AdminController::class, 'update'])->name('admin.events.update');
Route::post('/admin/events', [AdminController::class, 'store'])->name('admin.events.store');

// Schedule Management
Route::get('/admin/schedules', [AdminController::class, 'schedules'])->name('admin.schedules');
Route::get('/admin/schedules/create', [AdminController::class, 'createSchedule'])->name('admin.schedules.create');
Route::post('/admin/schedules', [AdminController::class, 'storeSchedule'])->name('admin.schedules.store');
Route::get('/admin/schedules/{id}/edit', [AdminController::class, 'editSchedule'])->name('admin.schedules.edit');
Route::patch('/admin/schedules/{id}', [AdminController::class, 'updateSchedule'])->name('admin.schedules.update');
Route::delete('/admin/schedules/{id}', [AdminController::class, 'destroySchedule'])->name('admin.schedules.destroy');

// Home dan halaman umum
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/events', [PageController::class, 'events'])->name('events');
Route::get('/media', [PageController::class, 'media'])->name('media');
Route::get('/donation', [PageController::class, 'donation'])->name('donation');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/ministries', [PageController::class, 'ministries'])->name('ministries');
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');

// Profile Management
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Tambahkan rute untuk jemaat baru
Route::middleware(['auth'])->group(function () {
    // Form pendaftaran jemaat baru
    Route::get('/admin/jemaats/create', [JemaatController::class, 'create'])->name('jemaats.create');
    Route::post('/admin/jemaats', [JemaatController::class, 'store'])->name('jemaats.store');

    // Tampilkan data jemaat di dashboard
    Route::get('/admin/jemaats', [JemaatController::class, 'index'])->name('jemaats.index');
});

require __DIR__.'/auth.php';
