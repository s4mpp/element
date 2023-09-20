<{{ $element }} {{ $attributes }} 
	@class(array_merge([$className], [
		'flex  w-full' => $full,
		'cursor-not-allowed' => (isset($disabled) && $disabled),
  		'bg-gray-200 hover:bg-gray-300 text-gray-800 items-center ease-linear transition disabled:cursor-not-allowed inline-flex justify-center gap-x-1.5 rounded-md  px-3 py-2 text-sm font-semibold  shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2',
	])) 
	
	x-bind:disabled="(typeof loading != 'undefined' ? loading : false)"
	
	:class="(typeof loading != 'undefined' ? loading : false) ? ' opacity-75 cursor-not-allowed' : ''">
	
	@if($loading)
		<svg x-cloak x-show="(typeof loading != 'undefined' ? loading : false)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class=" animate-spin w-3 h-3 mr-2">
			<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
		</svg>
	@endif
  
	{{ $slot }}
</{{ $element }}>