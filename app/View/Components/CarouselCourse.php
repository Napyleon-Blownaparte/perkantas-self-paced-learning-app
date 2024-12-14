<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CarouselCourse extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $courses;

    public function __construct($title = null, $courses)
    {
        $this->title = $title;
        $this->courses = $courses;
      
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carousel-course');
    }
}
