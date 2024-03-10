<{{ $element }} {{ $attributes->class([
	'--element-button',
	'w-full' => $full,
	'cursor-pointer',
	'px-2 py-1 text-xs' => ($size == 'mini'),
	'px-3 py-2 text-sm' => (!$size),
	'px-4 py-3 text-sm' => ($size == 'large'),
	'ring-1 ring-inset',
	'transition-colors duration-200 ease-in inline-flex  rounded-md font-semibold',
	'focus:outline focus:outline-2 outline-offset-1 disabled:opacity-75 disabled:pointer-events-none',

	'--element-button-default bg-white hover:bg-gray-100 active:bg-gray-100 ring-gray-300 outline-gray-300  text-gray-800' => ($style['is_default']),
	'--element-button-secondary bg-gray-400 hover:bg-gray-500 active:bg-gray-500 ring-gray-400 outline-gray-400  text-white' => ($style['is_secondary']),
	'--element-button-muted bg-gray-200 hover:bg-gray-300 active:bg-gray-300 ring-gray-300 outline-gray-300  text-gray-600' => ($style['is_muted']),
	'--element-button-success bg-green-600 hover:bg-green-700 active:bg-green-700 ring-green-600 outline-green-600  text-white' => ($style['is_success']),
	'--element-button-danger bg-red-600  hover:bg-red-700 active:bg-red-700 ring-red-600 outline-red-600  text-white' => ($style['is_danger']),
	'--element-button-info bg-blue-600 hover:bg-blue-700 active:bg-blue-700 ring-blue-600 outline-blue-600  text-white' => ($style['is_info']),
	'--element-button-warning bg-orange-600 hover:bg-orange-700 active:bg-orange-700 ring-orange-700 outline-orange-600  text-white' => ($style['is_warning']),

	]) }}
	:class="(typeof loading != 'undefined' ? loading : false) ? 'opacity-75 pointer-events-none' : ''">

	<div class="flex items-center justify-center gap-3 w-full">
		@if($loading)
			<div x-cloak x-show="(typeof loading != 'undefined' ? loading : false)" class="--element-button-loading">
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
	
		<div class="--element-button-content inline-flex gap-2">
			{{ $slot }}
		</div>
	</div>
</{{ $element }}>