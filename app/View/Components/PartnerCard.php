<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Partner;

class PartnerCard extends Component
{
    public Partner $partner;

    public function __construct(Partner $partner)
    {
        $this->partner = $partner;
    }

    public function render()
    {
        return view('components.partner-card');
    }
}

