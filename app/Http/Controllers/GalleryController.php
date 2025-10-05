<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $images = File::files(public_path('gallery')); // reads all files in /public/gallery
        $images = array_map(fn($file) => 'gallery/' . $file->getFilename(), $images);

        return view('gallery', compact('images'));
    }
}
