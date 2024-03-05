<?php

namespace S4mpp\Element\Traits;

trait IsClickable
{
    public function __construct(public bool $full = false, public ?string $size = null, public bool $loading = false, public string $context = 'default')
    {
    }

    /**
     * @return array<bool>
     */
    public function getStyle(): array
    {
        return [
            'is_default' => (! in_array($this->context, ['light', 'secondary', 'dark', 'success', 'warning', 'danger', 'info'])),
            'is_light' => ($this->context == 'light'),
            'is_secondary' => ($this->context == 'secondary'),
            'is_dark' => ($this->context == 'dark'),
            'is_success' => ($this->context == 'success'),
            'is_danger' => ($this->context == 'danger'),
            'is_warning' => ($this->context == 'warning'),
            'is_info' => ($this->context == 'info'),
        ];
    }
}
