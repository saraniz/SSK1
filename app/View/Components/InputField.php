<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    /**
     * Create a new component instance.
     */

    public $type;
    public $name;

    public $label;

    public $value;

    public $required;

    public function __construct($type, $name, $label, $required = false, $value = false)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->required = $required;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-field');
    }
}
