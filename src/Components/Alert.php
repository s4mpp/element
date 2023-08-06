<?php

namespace S4mpp\Element\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Alert extends Component
{
    public $flash_message;

 
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->flash_message = session('message');

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('element::alert');
    }
}
