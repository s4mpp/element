<?php

namespace S4mpp\Element\Components\Message;

use Illuminate\View\Component;
use Illuminate\Support\MessageBag;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Support\MessageBag as ContractMessageBag;

final class Error extends Component
{
    /**
     * @var array<string|int|mixed>
     */
    private array $messages = [];

    /**
     * Create a new component instance.
     */
    public function __construct(public ?string $title = null, public ?string $key = null, public $provider = null)
    {
        
        if (!$this->key) {
            $this->messages = $this->getAllErrorsBags();

            return;
        }

        /** @var ViewErrorBag|null */
        $errors = $this->getErrors();

        $error_bag = $errors?->getBag($this->key);

        $this->messages = $this->getErrorsFromBag($this->key, $error_bag);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.message', ['messages' => $this->messages, 'type' => 'danger', 'title' => $this->title]);
    }

    /**
     * @return array<string|int|mixed>
     */
    private function getAllErrorsBags(): array
    {
        /** @var ViewErrorBag|null */
        $errors_on_session = $this->getErrors();

        $errors = [];

        foreach ($errors_on_session?->getBags() ?? [] as $key => $bag) {
            $errors = array_merge($errors, $this->getErrorsFromBag($key, $bag));
        }

        return $errors;
    }

    /**
     * @return array<int|string|mixed>
     */
    private function getErrorsFromBag(string $key, MessageBag|ContractMessageBag|null $bag = null): array
    {
        foreach ($bag?->all() ?? [] as $error) {
            $errors[$key][] = $error;
        }

        return $errors ?? [];
    }

    private function getErrors(): ?ViewErrorBag
    {
        return ($this->provider) ? $this->provider : Session::get('errors');
    }
}
