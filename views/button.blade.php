<{{ $element }} {{ $attributes }} 
	@class([
		'flex w-full' => $full,
 		'inline-flex gap-x-1.5 rounded-md bg-'.$color.'-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-'.$color.'-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-'.$color.'-600'
	])>
	{{ $slot }}
</{{ $element }}>