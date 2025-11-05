<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class AmbGalleryController extends Controller
{
    public function index(Request $request){
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'folder' => 'required|string'
        ]);

        $imagePath = $request->image->store($request->folder, "public");

        dd($imagePath);

    }

    public function delete(Request $request)
    {
        $request->validate([
            'image' => 'required|string'
        ]);

        $imageUrl = $request->image;

        // Extract only the path part (no domain)
        $imagePath = parse_url($imageUrl, PHP_URL_PATH);

        // Remove the public URL prefix "/storage/"
        $relativePath = str_replace('/storage/', '', $imagePath);

        // Log for sanity check
        Log::info('Deleting image', [
            'url' => $imageUrl,
            'relativePath' => $relativePath,
            'exists' => Storage::disk('public')->exists($relativePath),
        ]);

        if (Storage::disk('public')->exists($relativePath)) {
            Storage::disk('public')->delete($relativePath);
            return response()->json(['success' => true]);
        }

        return response()->json([
            'success' => false,
            'message' => 'File not found: ' . $relativePath
        ], 404);
    }
}
