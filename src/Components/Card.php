<?php

namespace S4mpp\Element\Components;

use Illuminate\View\Component;

final class Card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public ?string $title = null, public bool $padding = true)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.card');
    }
}
