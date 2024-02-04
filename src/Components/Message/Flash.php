<?php

namespace S4mpp\Element\Components\Message;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Flash extends Component
{
    private ?string $message = null;

    private string $alert_type = 'success';
    
     /**
     * Create a new component instance.
     */
    public function __construct(public string $key = 'message', public string $type = 'success')
    {
        $this->message = session($this->key);

        if(in_array($this->type, ['success', 'danger', 'info', 'warning']))
        {
            $this->alert_type = $this->type;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('element::components.message.flash', [
            'message' => $this->message,
            'alert_type' => $this->alert_type
        ]);
    }
}
