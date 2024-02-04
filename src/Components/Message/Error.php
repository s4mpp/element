<?php

namespace S4mpp\Element\Components\Message;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Error extends Component
{
    private array $messages = [];

    /**
     * Create a new component instance.
     */
    public function __construct(public ?string $title = null, public string $key = 'default', public bool $all = false)
    {
        $this->messages = ($all) ? $this->getAllErrors() : $this->getErrorsBag(session()->get('errors')?->{$key});
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('element::components.message.error', ['messages' => $this->messages]);
    }

    private function getAllErrors()
    {
        $errors = [];

        foreach(session()->get('errors')?->getBags() ?? [] as $bag)
        {
            $errors = array_merge($errors, $this->getErrorsBag($bag));
        }

        return $errors ?? [];
    }

    private function getErrorsBag($bag)
    {
        foreach($bag?->all() ?? [] as $error)
        {
            $errors[] = $error;
        }

        return $errors ?? [];
    }
}
