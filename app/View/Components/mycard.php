<?php

namespace App\View\Components;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;
use App\Models\Card;
class Mycard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $mycard;
    public function __construct($mycard = [])
    {
        $mycard = Card::all();
        $this->mycard = $mycard;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mycard');
    }
}
