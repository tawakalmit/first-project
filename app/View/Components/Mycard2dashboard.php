<?php

namespace App\View\Components;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;
use App\Models\Mycard2DashboardModel;
class Mycard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $card2;
    public function __construct($card2 = [])
    {
        $card2 = Mycard2DashboardModel::all();
        $this->card2 = $card2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('mycard2');
    }
}
