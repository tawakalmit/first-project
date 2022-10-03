<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;
use App\Models\Card2;

class mycard2 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $mycard2;
    public function __construct($mycard2 = [])
    {
        $mycard2 = Card2::all();
        $this->mycard2 = $mycard2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mycard2');
    }
}
