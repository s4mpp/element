<?php

namespace S4mpp\Element\Components\Message;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;

/**
 * @codeCoverageIgnore
 */
final class Flash extends Component
{
    /**
     * @var array<int|string|mixed>
     */
    private array $messages = [];

    /**
     * Create a new component instance.
     */
    public function __construct(public string $type = 'info', public ?string $key = null)
    {
        if (! in_array($this->type, ['success', 'danger', 'info', 'warning'])) {
            $this->type = 'info';
        }

        if (!$this->key) {
            $this->messages = $this->getAllFlashMessages();

            return;
        }

        $messages = Session::get($this->key);

        if (! $messages) {
            return;
        }

        $this->messages = [$this->key => [$messages]];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Illuminate\Contracts\View\Factory
    {
        return view('element::components.message', [
            'messages' => $this->messages,
        ]);
    }

    /**
     * @return array<int|string|mixed>
     */
    private function getAllFlashMessages(): array
    {
        /** @var array<string>|null */
        $flash_keys = Session::get('_flash.old');

        foreach ($flash_keys ?? [] as $key) {
            $messages[$key][] = Session::get($key);
        }

        return $messages ?? [];
    }
}
