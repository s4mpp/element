<?php

namespace S4mpp\Element\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

final class Dropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $title = 'Dropdown', public string $position = 'left')
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.dropdown.index');
    }
}
