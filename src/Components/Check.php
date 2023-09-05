<?php

namespace S4mpp\Element\Components;

use Illuminate\View\Component;

class Check extends Component
{
    public array $class_input = [];
    
    public function __construct(public string $value, public bool $checked = false, public string $className = '')
    {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('element::checkbox');
    }
}
