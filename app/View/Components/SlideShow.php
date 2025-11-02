<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SlideShow extends Component
{
    public $slidesUrls;

    public function __construct($slidesUrls = [])
    {
        $this->slidesUrls = $slidesUrls;
    }

    public function render()
    {
        return view('components.slide-show');
    }
}

