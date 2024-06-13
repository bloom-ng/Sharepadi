<?php

namespace App\View\Components;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dashboard extends Component
{
    public $page;
    public $currentDate;
    /**
     * Create a new component instance.
     */
    public function __construct($page)
    {
        $this->page = $page;
        $this->currentDate = Carbon::now()->format('l, F j, Y');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard')->with('currentDate', $this->currentDate);
    }
}
