<{{ $element }} {{ $attributes->class([
	'element--button',
	'cursor-pointer',
	'w-full' => $full,
	'px-2 py-1 text-xs' => ($size == 'mini'),
	'px-3 py-2 text-sm' => (!$size),
	'px-4 py-3 text-sm' => ($size == 'large'),
	'hover:bg-gray-300',
	  'bg-gray-200 text-gray-800 ease-linear transition  inline-flex  rounded-md font-semibold',
	]) }}
	:class="(typeof loading != 'undefined' ? loading : false) ? 'opacity-75 pointer-events-none' : ''">

	<div class="flex items-center justify-center gap-3 w-full">
		@if($loading)
			<div x-cloak x-show="(typeof loading != 'undefined' ? loading : false)" class="element--button-loading">
				<svg  @class([
					'inline',
					'animate-spin',
					'w-2 h-2' => ($size == 'mini'),
					'w-3 h-3' => (!$size),
					'w-3.5 h-3.5' => ($size == 'large'),
				])
				xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
					<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
				</svg> 
			</div>
		@endif
	
		<div class="element--button-content">
			{{ $slot }}
		</div>
	</div>
</{{ $element }}>