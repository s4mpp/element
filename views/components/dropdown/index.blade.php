<div x-data="{dropdown : false, toggleDropdown() {this.dropdown = !this.dropdown}}" class="relative inline-block text-left ">

	@isset($button)
		<div {{ $button->attributes }}>
			{{ $button }}
		</div>
	@else
		<x-element::button {{ $attributes }} x-on:click="toggleDropdown()"> <span>{{ $title }}</span>
			<x-element::icon class=" w-5 h-5 mt-0.5" name="chevron-down" solid mini />
		</x-element::button>
	@endisset

	<div x-on:click.outside="dropdown = false"
		x-cloak
		x-show="dropdown"
		x-transition:enter="transition ease-out duration-100"
		x-transition:enter-start="transform opacity-0 scale-95"
		x-transition:enter-end="transform opacity-100 scale-100"
		x-transition:leave="transition ease-in duration-75"
		x-transition:leave-start="transform opacity-100 scale-100"
		x-transition:leave-end="transform opacity-0 scale-95"
		@class([
			'left-0' => ($position == 'left'),
			'right-0' => ($position == 'right'),
			'absolute z-50 mt-2 min-w-16 py-1  origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none'
		])
		role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
		
		@isset($body)
			<div {{ $body->attributes?->class(['py-1']) }}>{{ $body }}</div>
		@endisset

	</div>
</div>