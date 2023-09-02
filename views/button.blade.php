<{{ $element }} {{ $attributes }} 
	@class(array_merge([$className], [
		'bg-indigo-500' => !$className,
		'enabled:hover:bg-indigo-600' => (!$className && $element == 'button'),
		'hover:bg-indigo-600' => (!$className && $element == 'a'),
		'flex w-full' => $full,
 		'ease-linear transition disabled:cursor-not-allowed inline-flex justify-center gap-x-1.5 rounded-md  px-3 py-2 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2',
	])) x-bind:disabled="loading" :class="loading ? 'pointer-events-none' : ''">

	<svg x-cloak x-show="loading" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="animate-spin w-5 h-5 mr-3">
		<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
	</svg>
  
	{{ $slot }}
</{{ $element }}>