<?php

namespace S4mpp\Element\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public $color;
    
	public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $provider)
    {
        $this->color = (method_exists($provider, 'color')) ? $provider->color() : null;
        
		$this->label = (method_exists($provider, 'label')) ? $provider->label() : $provider;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('element::badge');
    }
}
