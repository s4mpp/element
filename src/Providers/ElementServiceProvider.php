<?php

namespace S4mpp\Element\Providers;

use S4mpp\Element\Components\Card;
use S4mpp\Element\Components\Link;
use S4mpp\Element\Components\Alert;
use S4mpp\Element\Components\Badge;
use S4mpp\Element\Components\Check;
use S4mpp\Element\Components\Input;
use S4mpp\Element\Components\Modal;
use S4mpp\Element\Components\Button;
use S4mpp\Element\Components\Option;
use Illuminate\Support\Facades\Blade;
use S4mpp\Element\Components\ItemView;
use Illuminate\Support\ServiceProvider;
use S4mpp\Element\Components\Icon;
use S4mpp\Element\Components\SlideOver;
use S4mpp\Element\Components\Notification;
use S4mpp\Element\Components\Radio;

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

		Blade::component('slide-over', SlideOver::class);
		
		Blade::component('notification', Notification::class);
		
		Blade::component('modal', Modal::class);
		

		$this->formComponents();
				
		$this->loadViewsFrom(__DIR__.'/../../views', 'element');
    }

	private function formComponents()
	{
		Blade::component('input', Input::class);
		
		Blade::component('check', Check::class);
		
		Blade::component('radio', Radio::class);
		
		Blade::component('option', Option::class);
	}
}