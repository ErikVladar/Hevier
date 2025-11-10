<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Models\Review;
use App\Models\Partner;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\AmbGalleryController;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

Route::view('/', 'welcome');
Route::view('about', 'about')->name('about');
Route::view('collab', 'collab')->name('collab');
Route::view('more', 'more')->name('more');
Route::get('stats', [StatsController::class, 'index'])->name('stats');
Route::get('/stats/{type}', [StatsController::class, 'show'])->name('stats.show');

Route::get('/gallery-images', function (\Illuminate\Http\Request $request) {
    $folder = $request->query('folder');
    if (!$folder) return response()->json([]);

    $files = collect(Storage::disk('public')->files($folder))
        ->filter(fn($f) => preg_match('/\.(jpg|jpeg|png|webp)$/i', $f))
        ->map(fn($f) => asset(Storage::url($f)))
        ->values();

    return response()->json($files);
});

Route::middleware('auth')->group(function () { 

    Route::get("ambGallery-upload", [AmbGalleryController::class, 'index']);
    Route::post("ambGallery-upload", [AmbGalleryController::class, 'store'])->name('ambGallery.upload.store');
    Route::post("ambGallery-delete", [AmbGalleryController::class, 'delete'])->name('ambGallery.delete');
});

Route::get('/partners', function () {
    $partners = Partner::latest()->get();
    return view('partners', compact('partners'));
})->name('partners');
Route::get('/partners/{partner:slug}', [PartnerController::class, 'show'])->name('partners.show');

Route::get('/gallery', function () {
    $images = GalleryPhoto::all(['path', 'title', 'description']);
    return view('gallery', compact('images'));
});


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/', function () {
    $reviews = Review::latest()->take(6)->get();
    return view('welcome', compact('reviews'));
})->name('home');

Route::get('/', [ContentController::class, 'home'])->name('home');
Route::get('about', [ContentController::class, 'about'])->name('about');
Route::get('/admin', [ContentController::class, 'admin']);
Route::post('/admin/update', [ContentController::class, 'update'])->name('content.update');

Route::resource('reviews', ReviewController::class)->middleware('auth');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';