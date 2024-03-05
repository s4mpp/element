@php
	$old = old($attributes['name']);

	$value = !empty($old) ? $old : null;

	$attributes['id'] = $attributes->get('id', 'input'.rand());

@endphp

<x-element::form.container title="{{ $title ?? null }}" required="{{ $attributes->get('required') }}" idInput="{{ $attributes->get('id') }}">
	<x-element::form.input-container class="h-[36px]">
		<input {{ $attributes->class([
			'form-input',
			'px-2 py-0.5',
			'border-none',
			'w-full',
			'rounded',
			'text-gray-900',
			'focus:ring-0',
			'placeholder:text-gray-400 sm:text-sm sm:leading-6',
		]) }} value="{{ $value ?? $slot }}">
	</x-element::form.input-container>
</x-element::form.container>