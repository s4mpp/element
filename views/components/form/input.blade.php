<x-element::form.container title="{{ $title ?? null }}">
	<x-element::form.input-container>
		<input {{ $attributes }} class="form-input" type="{{ $type ?? 'text' }}" wire:loading.attr="disabled" value="{{ $value ?? $slot }}">
	</x-element::form.input-container>
</x-element::form.container>