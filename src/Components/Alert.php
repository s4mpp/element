<?php

namespace S4mpp\Element\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Alert extends Component
{
     /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $type = null,
        public ?string $title = null
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('element::components.alert', [
            'is_default' => (!in_array($this->type, ['success', 'warning', 'danger', 'info'])),
            'is_success' => ($this->type == 'success'),
            'is_danger' => ($this->type == 'danger'),
            'is_warning' => ($this->type == 'warning'),
            'is_info' => ($this->type == 'info'),
        ]);
    }
}
