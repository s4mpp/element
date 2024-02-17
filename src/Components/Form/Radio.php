<?php

namespace S4mpp\Element\Components\Form;

use Illuminate\View\Component;
use Closure;
use Illuminate\Contracts\View\View;

class Radio extends Component
{    
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = null)
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.form.radio.index');
    }
}
