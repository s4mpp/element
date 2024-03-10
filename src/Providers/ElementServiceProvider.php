<?php

namespace S4mpp\Element\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

final class ElementServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::componentNamespace('S4mpp\\Element\\Components', 'element');

        $this->loadViewsFrom(__DIR__.'/../../views', 'element');
    }
}
