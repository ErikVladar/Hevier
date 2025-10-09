<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Models\Review;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\File;

Route::view('/', 'welcome');

Route::view('collab', 'collab')->name('collab');
Route::view('more', 'more')->name('more');
Route::view('stats', 'stats')->name('stats');
Route::view('partners', 'partners')->name('partners');
Route::get('/gallery', function () {
    $images = File::files(public_path('gallery'));
    $images = array_map(fn($file) => 'gallery/' . $file->getFilename(), $images);
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

Route::get('/', [ContentController::class, 'home'])->name('home');
Route::get('/admin', [ContentController::class, 'admin']);
Route::post('/admin/update', [ContentController::class, 'update'])->name('content.update');


// Authenticated routes for CRUD
Route::resource('reviews', ReviewController::class)->middleware('auth');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
