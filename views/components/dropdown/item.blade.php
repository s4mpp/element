<{{ $element }} {{ $attributes->class([
	'text-gray-700' => !$danger,
	'text-red-700' => $danger,
	'hover:bg-gray-100 hover:text-gray-900' => (!$danger && !$attributes->has('disabled')),
	'hover:bg-red-100 hover:text-red-900' => ($danger && !$attributes->has('disabled')),
	
	'transition-colors disabled:text-gray-700/50 disabled:cursor-not-allowed',
	'block px-4 py-1 text-sm w-full text-start',
]) }} >{{ $slot }}</{{ $element }}>