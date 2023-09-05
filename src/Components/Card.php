<?php

namespace S4mpp\Element\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title = null, public bool $padding = true, public string $className = '')
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('element::card');
    }
}
