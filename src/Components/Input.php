<?php

namespace S4mpp\Element\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;

class Input extends Component
{
    public string $id;
    
    public ?string $view_input;

    public $value;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = null,
        public ?string $name = null,
        public ?string $type = 'text',
        public string $className = '')
    {
        $this->value = old($name);

        $this->id = 'input_'.$type.'_'.$name.'_'.rand();

        $this->view_input = in_array($type, ['textarea', 'select', 'password']) ? $type : 'default';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('element::input.main', ['type' => $this->type]);
    }
}
