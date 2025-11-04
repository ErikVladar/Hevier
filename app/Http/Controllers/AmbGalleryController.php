<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AmbGalleryController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:5120', // max 5MB
            'folder' => 'required|string'
        ]);

        $folder = trim($request->folder, '/');

        // Convert to relative storage path
        $folder = str_replace('storage/', '', $folder);

        $path = $request->file('file')->store("public/{$folder}");

        return response()->json([
            'success' => true,
            'path' => Storage::url($path)
        ]);
    }

    public function delete(Request $request)
    {
        $request->validate([
            'image' => 'required|string'
        ]);

        $image = str_replace('/storage/', 'public/', $request->image);

        if (Storage::exists($image)) {
            Storage::delete($image);
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'File not found'], 404);
    }
}


