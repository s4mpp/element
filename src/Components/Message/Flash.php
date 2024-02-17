<?php

namespace S4mpp\Element\Components\Message;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;

class Flash extends Component
{
    private ?string $message = null;

    private string $alert_type = 'success';
    
     /**
     * Create a new component instance.
     */
    public function __construct(public string $key = 'message', public string $type = 'success')
    {
        $value = Session::get($this->key);

        if(!is_string($value) && !is_null($value))
        {
            return;
        }

        $this->message = $value;

        if(in_array($this->type, ['success', 'danger', 'info', 'warning']))
        {
            $this->alert_type = $this->type;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.message.flash', [
            'message' => $this->message,
            'alert_type' => $this->alert_type
        ]);
    }
}
