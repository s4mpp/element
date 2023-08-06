<?php

namespace S4mpp\Element\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use S4mpp\Element\Components\Card;
use S4mpp\Element\Components\Alert;
use S4mpp\Element\Components\Badge;

class ElementServiceProvider extends ServiceProvider 
{
    public function boot()
    {
		Blade::component('alert', Alert::class);
		
		Blade::component('card', Card::class);
		
		Blade::component('badge', Badge::class);
		
		$this->loadViewsFrom(__DIR__.'/../../views', 'element');
    }
}