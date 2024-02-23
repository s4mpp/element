<?php

namespace S4mpp\Element\Components\Message;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;

class Flash extends Component
{
    private array $messages = [];

    
     /**
     * Create a new component instance.
     */
    public function __construct(public string $type = 'info', public ?string $key = null, public bool $all = false)
    {
        if(!in_array($this->type, ['success', 'danger', 'info', 'warning']))
        {
            $this->type = 'info';
        }

        if($all)
        {
            $this->messages = $this->getAllFlashMessages();

            return;
        }

        $this->key = ($this->key) ?? 'message';

        $messages = Session::get($this->key);

        if(!$messages)
        {
            return;
        }

        $this->messages[$this->key][] = $messages;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.message', [
            'messages' => $this->messages,
        ]);
    }

    private function getAllFlashMessages(): array
    {
        $flash_keys = Session::get('_flash.old');

        foreach($flash_keys ?? [] as $key)
        {
            $messages[$key][] = Session::get($key);
        }

        return $messages ?? [];
    }
}
