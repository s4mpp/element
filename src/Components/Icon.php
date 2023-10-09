<?php

namespace S4mpp\Element\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Icon extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $name)
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('element::icons.x-circle');
    }
}
