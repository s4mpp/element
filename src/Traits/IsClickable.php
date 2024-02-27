<?php

namespace S4mpp\Element\Traits;

trait IsClickable
{
    public function __construct(public bool $full = false, public ?string $size = null, public bool $loading = false)
    {
    }
}
