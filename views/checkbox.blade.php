@aware(['name', 'class_feedback', 'type', 'class_input', 'name_feedback', 'required', 'attributes'])

@php
	$id_check = $type.'_'.$name_feedback.'_'.$value;
@endphp

<div class="flex justify-start items-start">
	<div class="flex h-6 items-center">
		<input

		@if(
			(old() && $value == old($name))
			||
			(!old() && isset($checked) && $checked)
		)
			checked=true
		@endif

		 {{ $attributes }} value="{{ $value }}" id="{{ $id_check }}" type="{{ $type }}" name="{{ $name }}" 
		 		 
		 @class(array_merge([$className], ['h-4 w-4 rounded border-gray-300 focus:ring-0 cursor-pointer']))>
	</div>
	<div class=" text-sm leading-6">
		<label for="{{ $id_check }}" class="font-medium text-gray-900 w-full pl-2 pr-5 cursor-pointer py-1.5">{{ $slot }}</label>
	</div>
</div>