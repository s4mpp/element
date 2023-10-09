<?php

namespace S4mpp\Element\Components;

use Illuminate\View\Component;

class Radio extends Component
{    
    public function __construct(public string $type = 'radio', public ?string $name = null, public ?string $value = null, public bool $checked = false)
    {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('element::input.checkable');
    }
}
