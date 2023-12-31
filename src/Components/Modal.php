<?php

namespace S4mpp\Element\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Modal extends Component
{
 
    /**
     * Create a new component instance.
     */
    public function __construct(public string $idModal, public ?string $title = null,  public ?string $subtitle = null, public bool $danger = false)
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('element::modal');
    }
}
