@php
	$old = old($attributes['name']);

	$value = !empty($old) ? $old : null;
@endphp
<x-element::form.container title="{{ $title ?? null }}">
	<x-element::form.input-container>
		<input {{ $attributes }} class="form-input
		px-2 py-1
		border-none
		w-full
		rounded
		text-gray-900
		focus:ring-0
		placeholder:text-gray-400 sm:text-sm sm:leading-6
		" type="{{ $type ?? 'text' }}" wire:loading.attr="disabled" value="{{ $value ?? $slot }}">
	</x-element::form.input-container>
</x-element::form.container>