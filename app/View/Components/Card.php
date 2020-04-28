<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title, $buttonUrl, $buttonText;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $buttonUrl = null, $buttonText = null)
    {
        $this->title        = $title;
        $this->buttonUrl    = $buttonUrl;
        $this->buttonText   = $buttonText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
