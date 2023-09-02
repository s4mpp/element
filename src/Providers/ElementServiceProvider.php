<?php

namespace S4mpp\Element\Providers;

use S4mpp\Element\Components\Check;
use S4mpp\Element\Components\Input;
use S4mpp\Element\Components\Card;
use S4mpp\Element\Components\Link;
use S4mpp\Element\Components\Option;
use S4mpp\Element\Components\Alert;
use S4mpp\Element\Components\Badge;
use S4mpp\Element\Components\Button;
use Illuminate\Support\Facades\Blade;
use S4mpp\Element\Components\ItemView;
use Illuminate\Support\ServiceProvider;

class ElementServiceProvider extends ServiceProvider 
{
    public function boot()
    {
		Blade::component('alert', Alert::class);
		
		Blade::component('card', Card::class);
		
		Blade::component('badge', Badge::class);
		
		Blade::component('item-view', ItemView::class);
		
		Blade::component('button', Button::class);
		
		Blade::component('link', Link::class);

		Blade::component('input', Input::class);
		
		Blade::component('check', Check::class);
		
		Blade::component('option', Option::class);
				
		$this->loadViewsFrom(__DIR__.'/../../views', 'element');
    }
}