<x-element::form.container title="{{ $title ?? null }}">
	<x-element::form.input-container>
		<textarea class="form-textarea" {{ $attributes }} ></textarea>
	</x-element::form.input-container>
</x-element::form.container>