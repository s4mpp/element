<?php

namespace S4mpp\Element\Components\Form;

use Illuminate\View\Component;
use Closure;
use Illuminate\Contracts\View\View;

class Checkbox extends Component
{    
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = null,
        public ?string $name = null)
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('element::components.form.main');
    }
}