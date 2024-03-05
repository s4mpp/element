<?php

namespace S4mpp\Element\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

final class Modal extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $idModal, public ?string $title = null, public ?string $subtitle = null, public bool $danger = false)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.modal.index');
    }
}
