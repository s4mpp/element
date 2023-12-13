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

    public ?string $name_input;
    
    public $value;
    
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = null,
        public ?string $name = null,
        public ?string $type = null,
        public ?string $className = null)
    {
        $old = old($name);

        $this->value = !empty($old) ? $old : null;

        $this->id = 'input_'.$type.'_'.$name.'_'.rand();

        $this->view_input = $this->_getViewInput($type);

        $this->name_input = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('element::input.main', ['type' => $this->type]);
    }

    private function _getViewInput(string $type = null)
    {
        switch($type)
        {
            case 'textarea':
            case 'select':
            case 'password':
                return $type;
                
            case null:
                return null;

            default:
                return 'default';
        }
    }
}
