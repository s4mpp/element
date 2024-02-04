<?php

namespace S4mpp\Element\Components\Form;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Input extends Component
{
    public $value;
    
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = null,
        public ?string $name = null,
        public ?string $type = 'text')
    {
        $old = old($name);

        $this->value = !empty($old) ? $old : null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('element::components.form.main', ['view_input' => 'default', 'type' => $this->type]);
    }

}
