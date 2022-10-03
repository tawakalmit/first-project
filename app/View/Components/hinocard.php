<?php

namespace App\View\Components;

use Illuminate\View\Component;

class hinocard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $hino = [
            'Bespoke Offering', 'Trusted & Reliable', 'Customer', 'Competitive'
        ];
        return view('components.hinocard', compact('hino'));
    }
}
