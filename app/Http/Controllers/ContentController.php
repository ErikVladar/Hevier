<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    // Show page with content (frontend or admin)
    public function show()
    {
        $content = json_decode(
            file_get_contents(resource_path('content.json')),
            true
        );

        // For frontend
        return view('welcome', compact('content'));
    }

    public function home()
    {
        $content = json_decode(file_get_contents(resource_path('content.json')), true);
        $reviews = \App\Models\Review::latest()->take(6)->get();

        return view('welcome', compact('content', 'reviews'));
    }

    public function about()
    {
        $content = json_decode(file_get_contents(resource_path('content.json')), true);
        $reviews = \App\Models\Review::latest()->take(6)->get();

        return view('about', compact('content', 'reviews'));
    }


    // Show admin form
    public function admin()
    {
        $content = json_decode(
            file_get_contents(resource_path('content.json')),
            true
        );

        return view('admin', compact('content'));
    }

    // Handle saving updates
    public function update(Request $request)
    {
        $content = json_decode(file_get_contents(resource_path('content.json')), true);

        switch ($request->input('field')) {
            case 'title':
                $content['about']['title'] = $request->input('title');
                break;

            case 'body':
                $content['about']['body'] = $request->input('body');
                break;

            case 'more_title':
                $content['about']['more_title'] = $request->input('more_title');
                break;

            case 'more_body':
                $content['about']['more_body'] = $request->input('more_body');
                break;

            case 'reviews':
                $content['about']['reviews'] = $request->input('reviews');
                break;
        }

        file_put_contents(
            resource_path('content.json'),
            json_encode($content, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );

        return redirect()->back()->with('status', 'Updated!');
    }
}
