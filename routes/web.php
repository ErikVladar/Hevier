<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Models\Review;
use App\Models\Partner;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\PartnerController;

Route::view('/', 'welcome');
Route::view('about', 'about')->name('about');
Route::view('collab', 'collab')->name('collab');
Route::view('more', 'more')->name('more');
Route::view('stats', 'stats')->name('stats');
// Route::view('partners', 'partners')->name('partners');
// Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
Route::get('/partners', function () {
    $partners = Partner::latest()->get(); // limit to 6 newest
    return view('partners', compact('partners'));
})->name('partners');
Route::get('/partners/{partner:slug}', [PartnerController::class, 'show'])->name('partners.show');

Route::get('/gallery', function () {
    $images = File::files(public_path('storage/gallery'));
    $images = array_map(fn($file) => 'storage/gallery/' . $file->getFilename(), $images);
    return view('gallery', compact('images'));
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Homepage (fetch reviews for display)
Route::get('/', function () {
    $reviews = Review::latest()->take(6)->get(); // limit to 6 newest
    return view('welcome', compact('reviews'));
})->name('home');

Route::get('about', function () {
    $reviews = Review::latest()->take(6)->get(); // limit to 6 newest
    return view('about', compact('reviews'));
})->name('about');

Route::get('/', [ContentController::class, 'home'])->name('home');
Route::get('about', [ContentController::class, 'about'])->name('about');
Route::get('/admin', [ContentController::class, 'admin']);
Route::post('/admin/update', [ContentController::class, 'update'])->name('content.update');


// Authenticated routes for CRUD
Route::resource('reviews', ReviewController::class)->middleware('auth');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
