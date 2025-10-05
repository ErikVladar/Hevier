<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Volt\Volt;

// Guest routes
Route::middleware('guest')->group(function () {
    // Volt pages (display forms)
    Volt::route('register', 'pages.auth.register')->name('register');
    Volt::route('login', 'pages.auth.login')->name('login');
    Volt::route('forgot-password', 'pages.auth.forgot-password')->name('password.request');
    Volt::route('reset-password/{token}', 'pages.auth.reset-password')->name('password.reset');

    // Blade POST login handler
    Route::post('/login', function (Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()->withErrors([
                'email' => __('auth.failed'),
            ]);
        }

        $request->session()->regenerate();

        // Always redirect to welcome page
        return redirect('/'); 
    })->name('login.post'); // separate name to avoid route name conflict
});

// Authenticated routes
Route::middleware('auth')->group(function () {
    Volt::route('verify-email', 'pages.auth.verify-email')->name('verification.notice');
    Volt::route('confirm-password', 'pages.auth.confirm-password')->name('password.confirm');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/'); // welcome page
    })->name('logout');
});
