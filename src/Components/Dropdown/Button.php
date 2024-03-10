<?php

namespace S4mpp\Element\Components\Dropdown;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use S4mpp\Element\Traits\IsClickable;

final class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public bool $danger = false)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.dropdown.item', ['element' => 'button']);
    }
}
