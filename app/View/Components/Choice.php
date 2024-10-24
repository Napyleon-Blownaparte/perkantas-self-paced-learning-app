<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Choice extends Component
{
    /**
     * Create a new component instance.
     */
    public $choice;
    public function __construct($choice)
    {
        //
        $this->choice = $choice;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.choice');
    }
}
