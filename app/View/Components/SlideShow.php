<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SlideShow extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        // Array of src to images for each slide 
        public array $slidesUrls,
        public int $slideCount
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.slide-show');
    }
}
