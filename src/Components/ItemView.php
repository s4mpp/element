<?php

namespace S4mpp\Element\Components;

use Illuminate\View\Component;

class ItemView extends Component
{
    public $title;

    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, $content = null)
    {
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('element::item-view');
    }
}
