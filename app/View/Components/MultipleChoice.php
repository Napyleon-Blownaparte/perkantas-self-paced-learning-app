<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MultipleChoice extends Component
{
    /**
     * Create a new component instance.
     */
    public $question;
    public function __construct($question)
    {
        //
        $this->question = $question;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.multiple-choice');
    }
}
