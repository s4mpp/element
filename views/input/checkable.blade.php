@aware(['name_input', 'name'])

@php
	$name_input = $name_input ?? $name;

	$id = 'check_'.str_replace(['[', ']'], '', $name_input) .'_'.$value.'_'.rand();
@endphp

<div class="flex justify-start items-start pt-[6px] min-h-[36px]">
	<div class="flex h-6 items-center">
		<input

		@class([
			'h-4 w-4 border-gray-300 cursor-pointer focus:ring-0',
			'radio rounded-full' => ($type == 'radio'),
			'checkbox rounded' => ($type == 'checkbox')
		])

		@if(
			(old() && $value == old($name))
			||
			(!old() && isset($checked) && $checked)
		)
			checked=true
		@endif

		 {{ $attributes }} value="{{ $value }}" id="{{ $id ?? $slot }}" type="{{ $type }}" name="{{ $name_input }}" >
	</div>
	<div class="text-sm leading-6 ">
		<label for="{{ $id }}" class="font-medium text-gray-900 w-full cursor-pointer py-1.5">
			<div class="ml-2  mr-5">
				{{ $slot }}
			</div>
		</label>
	</div>
</div>