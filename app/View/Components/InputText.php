<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputText extends Component
{
    public $label, $name, $value, $disabled, $hidden, $readonly;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = null, $name, $value = null, $disabled = null, $hidden = null, $readonly = null)
    {
        $this->label    = $label;
        $this->name     = $name;
        $this->value    = $value;
        $this->disabled = $disabled;
        $this->hidden   = $hidden;
        $this->readonly = $readonly;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input-text');
    }
}
