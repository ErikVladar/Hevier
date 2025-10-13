<?php

namespace App\Http\Controllers;

use App\Models\GalleryPhoto;

class GalleryController extends Controller
{
    public function index()
    {
        $images = GalleryPhoto::latest()->get();

        return view('gallery.index', compact('images'));
    }
}
