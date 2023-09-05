<?php

namespace S4mpp\Element\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;

class Input extends Component
{
    public array $class_feedback = [];

    public string $id;
    
    public string $name_feedback;

    public ?string $view_input;

    public $value;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public ?string $type = null,
        public ?string $accept = null,
        public ?string $title = null,
        public $selected = null,
        public bool $required = false,
        public string $className = '')
    {
        $this->value = ($this->_isFillable($type)) ? old($name) : null;

        $this->name_feedback = str_replace(['][', '[', ']'], '', $name);

        $this->id = 'input_'.$type.'_'.$name;

        // $errors = Session::get('errors');

        // $this->class_feedback = array_merge([$this->class], [
        //     'is-valid' => ($errors && !$errors->has($this->name_feedback) && !empty((string)old($name))),
        //     'is-invalid' => ($errors && $errors->has($this->name_feedback)),
        // ]);

        $this->view_input = $this->_getView($type);
    }

    private function _getView(string $type = null): ?string
    {
        switch($type)
        {
            case 'textarea':
                return 'textarea';
            
            case 'select':
                return 'select';
            
            case 'checkbox':
            case 'radio':
                return null;

            default:
                return 'default';
        }
    }

    private function _isFillable(string $type = null): bool
    {
        return (is_null($type) || !in_array($type, ['password']));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('element::form_group');
    }
}
