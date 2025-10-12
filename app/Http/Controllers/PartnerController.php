<?php

namespace App\Http\Controllers;

use App\Models\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all()->groupBy('type');
        return view('partners.index', compact('partners'));
    }

    public function show(Partner $partner)
    {
        return view('partners.show', compact('partner'));
    }
}

