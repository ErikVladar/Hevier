<?php

namespace App\View\Components;

use Closure;
use Dotenv\Util\Str;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextExtend extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $color,
        public $title,
        public $description
    ) {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-extend');
    }
}
