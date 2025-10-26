<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function show()
    {
        $content = json_decode(
            file_get_contents(resource_path('content.json')),
            true
        );

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

    public function admin()
    {
        $content = json_decode(
            file_get_contents(resource_path('content.json')),
            true
        );

        return view('admin', compact('content'));
    }

    public function update(Request $request)
    {
        $content = json_decode(file_get_contents(resource_path('content.json')), true);

        switch ($request->input('field')) {
            case 'title':
                $content['about']['title_1'] = $request->input('title_1');
                $content['about']['title_2'] = $request->input('title_2');
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
            case 'about_section_title':
                $content['about']['about_section_title'] = $request->input('about_section_title');
                break;

            case 'about_section_body':
                $content['about']['about_section_body'] = $request->input('about_section_body');
                break;

            case 'for_whom':
                $content['about']['for_whom_1'] = $request->input('for_whom_1');
                $content['about']['for_whom_2'] = $request->input('for_whom_2');
                $content['about']['for_whom_3'] = $request->input('for_whom_3');
                break;

            case 'why_buy':
                $content['about']['why_buy_title'] = $request->input('why_buy_title');
                $content['about']['why_buy_body'] = $request->input('why_buy_body');
                break;

            case 'cta_text':
                $content['about']['cta_text'] = $request->input('cta_text');
                break;
        }

        file_put_contents(
            resource_path('content.json'),
            json_encode($content, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );

        return redirect()->back()->with('status', 'Updated!');
    }
}
