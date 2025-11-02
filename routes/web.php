<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Models\Review;
use App\Models\Partner;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\StatsController;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

Route::view('/', 'welcome');
Route::view('about', 'about')->name('about');
Route::view('collab', 'collab')->name('collab');
Route::view('more', 'more')->name('more');
Route::get('stats', [StatsController::class, 'index'])->name('stats');
Route::get('/stats/{type}', [StatsController::class, 'show'])->name('stats.show');


Route::middleware('auth')->group(function () {

    Route::post('/gallery-upload', function (Request $request) {
        $request->validate([
            'folder' => 'required|string',
            'photo'  => 'required|image|max:5120',
        ]);

        $folder = trim($request->folder, '/');
        $path = $request->file('photo')->store("public/{$folder}");
        $relativePath = str_replace('public/', 'storage/', $path);

        return response()->json(['path' => $relativePath]);
    });

    Route::delete('/gallery-delete', function (Request $request) {
        $request->validate(['path' => 'required|string']);
        $storagePath = str_replace('storage/', 'public/', $request->path);
        if (Storage::exists($storagePath)) {
            Storage::delete($storagePath);
        }
        return response()->noContent();
    });

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

// Homepage (fetch reviews for display)
Route::get('/', function () {
    $reviews = Review::latest()->take(6)->get(); // limit to 6 newest
    return view('welcome', compact('reviews'));
})->name('home');

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
