<?php

namespace S4mpp\Element\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public $color_badge;
    
	public $label_badge;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public $provider = null,
        public ?string $color = null,
        public ?string $label = null,
        public bool $loading = false,
        public ?string $loadingText = null)
    {
        $this->color_badge = $this->_getColor($provider, $color);
        
        if($loading)
        {
            $loading_text = $this->_getLabelLoading($provider, $loadingText);
        }
        
        $this->label_badge = $loading_text ?? $this->_getLabel($provider, $label);
        
    }

    private function _getColor($provider, ?string $color = null): ?string
    {
        if($color)
        {
            return $color;
        }

        return ($provider && method_exists($provider, 'color')) ? ($provider->color() ?? 'gray') : null;
    }

    private function _getLabel($provider, ?string $label = null): ?string
    {
        if($label)
        {
            return $label;
        }

        return ($provider && method_exists($provider, 'label')) ? ($provider->label() ?? $provider) : ($label ?? null);
    }

    private function _getLabelLoading($provider, ?string $loading_text = null): ?string
    {
        if($loading_text)
        {
            return $loading_text;
        }
        
        return($provider && method_exists($provider, 'loading')) ? ($provider->loading() ?? 'Please wait...') : null;
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
