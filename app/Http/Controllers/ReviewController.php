<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    // List all reviews (for admin panel if needed)
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('reviews.index', compact('reviews'));
    }

    // Show create form
    public function create()
    {
        return view('reviews.create');
    }

    // Store new review
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'text'  => 'required|string',
            'photo' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('reviews', 'public');
        }

        Review::create($validated);

        return redirect()->route('home')->with('success', 'Recenzia bola pridaná.');
    }

    // Show edit form
    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    // Update review
    public function update(Request $request, Review $review)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'text'  => 'required|string',
            'photo' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($review->photo) {
                Storage::disk('public')->delete($review->photo);
            }
            $validated['photo'] = $request->file('photo')->store('reviews', 'public');
        }

        $review->update($validated);

        return redirect()->route('home')->with('success', 'Recenzia bola upravená.');
    }

    // Delete review
    public function destroy(Review $review)
    {
        if ($review->photo) {
            Storage::disk('public')->delete($review->photo);
        }

        $review->delete();

        return redirect()->route('home')->with('success', 'Recenzia bola zmazaná.');
    }
}
