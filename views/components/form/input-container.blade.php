<div class="flex group form-input justify-between items-center px-0.5 py-1
	w-full rounded-md border-0  shadow-sm
	ring-1 ring-inset ring-gray-300
	transition ease-linear duration-200
	focus-within:ring-gray-600 
	focus-within:ring-2 
	focus-within:ring-inset 
	disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500 disabled:ring-gray-20">

	@isset($start)     
		<div>
			{{ $start }}
		</div>
	@endisset
	
	<div class="flex-1">
		{{ $slot }}
	</div>

	@isset($end)
		<div>
			{{ $end }}
		</div>
	@endisset


	{{-- @php
		$class_input = array_merge(explode(' ', $className), [
			'form-input'
			// 'pl-10' => isset($start),
			// 'pr-10' => isset($end),
			// 'form-input', 'block', 'w-full', 'rounded-md', 'border-0', 'py-1.5', 'shadow-sm',
			// 'text-gray-900',
			// 'placeholder:text-gray-400', 'sm:text-sm', 'sm:leading-6',
			// 'ring-1', 'ring-inset', 'ring-gray-300',
			// 'focus:ring-gray-600', 
			// 'focus:ring-2', 'focus:ring-inset',
			// 'transition', 'ease-linear', 'duration-200', 
			// 'disabled:cursor-not-allowed', 'disabled:bg-gray-50', 'disabled:text-gray-500', 'disabled:ring-gray-200'
		]);
	@endphp --}}
	
	
</div>