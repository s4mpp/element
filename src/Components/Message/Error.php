<?php

namespace S4mpp\Element\Components\Message;

use Closure;
use Illuminate\View\Component;
use Illuminate\Support\MessageBag;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Support\MessageBag as ContractMessageBag;

class Error extends Component
{
    /**
     *
     * @var array<string>
     */
    private array $messages = [];

    /**
     * Create a new component instance.
     */
    public function __construct(public ?string $title = null, public string $key = 'default', public bool $all = false)
    {
        if($all)
        {
            $this->messages = $this->getAllErrorsBags();
        }
        else
        {
            /** @var ViewErrorBag|null */
            $errors = Session::get('errors');

            $error_bag = $errors?->getBag($this->key);

            $this->messages = $this->getErrorsFromBag($error_bag);
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.message.error', ['messages' => $this->messages]);
    }

    /**
     *
     * @return array<string>
     */
    private function getAllErrorsBags(): array
    {
        /** @var ViewErrorBag|null */
        $errors_on_session = Session::get('errors');

        $errors = [];
        
        foreach($errors_on_session?->getBags() ?? [] as $bag)
        {
            $errors = array_merge($errors, $this->getErrorsFromBag($bag));
        }

        return $errors;
    }

    /**
     *
     * @return array<string>
     */
    private function getErrorsFromBag(MessageBag | ContractMessageBag $bag = null): array
    {
        foreach($bag?->all() ?? [] as $error)
        {
            $errors[] = $error;
        }

        return $errors ?? [];
    }
}
