<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Review;

class ReviewCard extends Component
{
    public $review;

    public function __construct(Review $review)
    {
        $this->review = $review;
    }

    public function render()
    {
        return view('components.review-card');
    }
}
