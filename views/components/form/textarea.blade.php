<x-element::form.container title="{{ $title ?? null }}">
	<x-element::form.input-container>
		<textarea 
		class="form-textarea
		px-2 py-1
		border-none
		w-full
		rounded
		text-gray-900
		focus:ring-0
		placeholder:text-gray-400 sm:text-sm sm:leading-6
		" {{ $attributes }} ></textarea>
	</x-element::form.input-container>
</x-element::form.container>