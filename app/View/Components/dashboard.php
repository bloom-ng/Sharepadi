<?php

namespace App\View\Components;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dashboard extends Component
{
    public $page;
    /**
     * Create a new component instance.
     */
    public function __construct($page)
    {
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $currentDate = Carbon::now()->format('l, F j, Y');
        return view('components.dashboard')->with('currentDate', $currentDate);
    }
}
