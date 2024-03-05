<?php

namespace S4mpp\Element\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use S4mpp\Element\Traits\IsClickable;

final class Link extends Component
{
    use IsClickable;

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.clickable', ['element' => 'a', 'style' => $this->getStyle()]);
    }
}
