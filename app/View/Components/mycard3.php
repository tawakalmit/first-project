<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Card3;

class mycard3 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $mycard3;
    public function __construct($mycard3 = [])
    {
        $mycard3 = Card3::all();
        $this->mycard3 = $mycard3;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mycard3');
    }
}
