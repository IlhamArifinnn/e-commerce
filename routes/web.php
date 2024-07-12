<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\KategoriTokohController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;

// Routes for Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/about', [LandingPageController::class, 'about'])->name('about');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('contact');
Route::get('/shop', [LandingPageController::class, 'shop'])->name('shop');
Route::get('/cart', [LandingPageController::class, 'cart'])->name('cart');

// Dashboard route for authenticated and verified users
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated user routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User-specific routes
    Route::get('testimonis/index', [TestimoniController::class, 'index'])->name('testimonis.index');
    Route::get('testimonis/create', [TestimoniController::class, 'create'])->name('testimonis.create');
    Route::post('testimonis', [TestimoniController::class, 'store'])->name('testimonis.store');
    Route::get('testimonis/{testimoni}/edit', [TestimoniController::class, 'edit'])->name('testimonis.edit');
    Route::put('testimonis/{testimoni}', [TestimoniController::class, 'update'])->name('testimonis.update');
    Route::delete('testimonis/{testimoni}', [TestimoniController::class, 'destroy'])->name('testimonis.destroy');


    // Route::get('/testimonis/create', [TestimoniController::class, 'create'])->name('testimonis.create');
    // Route::get('/testimonis', [TestimoniController::class, 'index'])->name('testimonis.index');
    // Route::post('/testimonis', [TestimoniController::class, 'store'])->name('testimonis.store');
    // Route::get('/testimonis/{testimoni}', [TestimoniController::class, 'show'])->name('testimonis.show');
    // Route::get('/testimonis/{testimoni}/edit', [TestimoniController::class, 'edit'])->name('testimonis.edit');
    // Route::put('/testimonis/{testimoni}', [TestimoniController::class, 'update'])->name('testimonis.update');
    // Route::delete('/testimonis/{testimoni}', [TestimoniController::class, 'destroy'])->name('testimonis.destroy');



    Route::get('/profil', function () {;
        return view('profile.profile');
    });
});
// Admin-specific routes with 'admin' middleware
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::resource('jenis_produks', JenisProdukController::class);
    Route::resource('kategori_tokohs', KategoriTokohController::class);
    Route::resource('produks', ProdukController::class);
    Route::get('testimonis/create', [TestimoniController::class, 'create'])->name('testimonis.create');
    Route::post('testimonis', [TestimoniController::class, 'store'])->name('testimonis.store');
    Route::get('testimonis/{testimoni}/edit', [TestimoniController::class, 'edit'])->name('testimonis.edit');
    Route::put('testimonis/{testimoni}', [TestimoniController::class, 'update'])->name('testimonis.update');
    Route::delete('testimonis/{testimoni}', [TestimoniController::class, 'destroy'])->name('testimonis.destroy');
});


// Additional routes
require __DIR__ . '/auth.php';
