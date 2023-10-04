<?php

namespace S4mpp\Element\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Link extends Component
{
    public $element = 'a';
    
    /**
     * Create a new component instance.
     */
    public function __construct(public bool $full = false, public string $className = '', public bool $disabled = false, public bool $loading = true)
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('element::button', ['attr_disabled' => false]);
    }
}
