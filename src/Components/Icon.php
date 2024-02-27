<?php

namespace S4mpp\Element\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

final class Icon extends Component
{
    public int $size;

    public string $style;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $name, public bool $mini = false, bool $solid = false)
    {
        if ($mini) {
            $solid = true;
        }

        $this->size = ($mini) ? 20 : 24;

        $this->style = ($solid) ? 'solid' : 'outline';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.icons.'.$this->size.'.'.$this->style.'.'.$this->name);
    }
}
