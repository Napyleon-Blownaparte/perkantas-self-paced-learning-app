<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionReverse extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $content;
    public $imgSrc;
    public $videoSrc;

    public function __construct($title, $content, $imgSrc=null,$videoSrc = null)
    {
        //
        $this->title = $title;
        $this->content = $content;
        $this->imgSrc = $imgSrc;
        $this->videoSrc = $videoSrc;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section-reverse');
    }
}
