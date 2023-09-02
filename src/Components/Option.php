<?php

namespace S4mpp\Element\Components;

use Illuminate\View\Component;

class Option extends Component
{
    public function __construct(public string $value, public bool $selected = false)
    {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('element::option');
    }
}
