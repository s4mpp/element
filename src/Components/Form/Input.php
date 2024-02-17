<?php

namespace S4mpp\Element\Components\Form;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Input extends Component
{    
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = null,
        public ?string $name = null,
        public ?string $type = 'text')
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.form.input',  ['type' => $this->type]);
    }
}
