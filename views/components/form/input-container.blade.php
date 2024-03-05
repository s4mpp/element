@aware(['start', 'end'])

<div {{ $attributes->class([
	'--element-input-container',
	'flex group form-input justify-between items-center px-0.5 py-1',
	'w-full rounded-md border-0  shadow-sm',
	'ring-1 ring-inset ring-gray-300',
	'transition ease-linear duration-200',
	'focus-within:ring-gray-600 ',
	'focus-within:ring-2 ',
	'focus-within:ring-inset ',
	'disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500 disabled:ring-gray-20',
]) }}>

	@isset($start)     
		<div class="  justify-center flex items-center">
			{{ $start }}
		</div>
	@endisset
	
	<div class="flex-1">
		{{ $slot }}
	</div>

	@isset($end)
		<div class="  justify-center flex items-center">
			{{ $end }}
		</div>
	@endisset
</div>