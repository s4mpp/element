<?php

namespace S4mpp\Element\Components\Form;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

final class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public ?string $title = null)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.form.input');
    }
}
