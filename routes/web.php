<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\KategoriTokohController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/about', [LandingPageController::class, 'about'])->name('about');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('contact');
Route::get('/shop', [LandingPageController::class, 'shop'])->name('shop');
Route::get('/cart', [LandingPageController::class, 'cart'])->name('cart');


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::resource('jenis_produks', JenisProdukController::class);
    Route::resource('kategori_tokohs', KategoriTokohController::class);
    Route::resource('produks', ProdukController::class);
    Route::resource('testimonis', TestimoniController::class);

    Route::get('/profile', function () {
        return view('profile.profile');
    });
});


require __DIR__ . '/auth.php';
