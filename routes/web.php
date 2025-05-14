<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FighterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TrainerController;

// Publieke routes
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/evenementen', [EventController::class, 'index'])->name('events.index');
Route::get('/wordlid', function () {
    return view('pages.wordlid');
})->name('pages.wordlid');

Route::get('/diensten', function () {
    return view('pages.diensten');
})->name('diensten');

// Routes voor Fighters
Route::get('/fighters', [FighterController::class, 'index'])->name('fighters.index');
Route::get('/fighters/create', [FighterController::class, 'create'])->name('fighters.create');
Route::post('/fighters', [FighterController::class, 'store'])->name('fighters.store');

// Routes voor gebruikersdashboard (na inloggen)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    // Profiel bewerken en bijwerken
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

// Routes voor admin-dashboard (admin moet ingelogd zijn)
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// Redirect na inloggen op basis van rol
Route::get('/redirect', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard'); // Redirect naar admin dashboard
    }

    return redirect()->route('dashboard'); // Redirect naar gebruikersdashboard
});

require __DIR__.'/auth.php';
