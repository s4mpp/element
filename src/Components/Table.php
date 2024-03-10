<?php

namespace S4mpp\Element\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

final class Table extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $empty_message = 'No content')
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.table');
    }
}
