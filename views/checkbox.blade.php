@aware(['name', 'class_feedback', 'type', 'class_input', 'name_feedback', 'required', 'attributes'])

@php
	$id_check = $type.'_'.$name_feedback.'_'.$value;
@endphp

<div class="relative flex items-start">
	<div class="flex h-6 items-center">
		<input

		@if(
			(old() && $value == old($name))
			||
			(!old() && isset($checked) && $checked)
		)
			checked 
		@endif

		 {{ $attributes }} value="{{ $value }}" id="{{ $id_check }}" type="{{ $type }}" name="{{ $name }}" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
	</div>
	<div class="ml-3 text-sm leading-6">
		<label for="{{ $id_check }}" class="font-medium text-gray-900">{{ $slot }}</label>
	</div>
</div>

{{-- <div style="height: 24px; padding-top: 12px"  @class(array_merge($class_feedback ?? [], $class_input ?? [], ['form-check form-check-inline align-items-center d-flex mb-3 float-start']))>
	<input {{ $attributes }}  @class(array_merge($class_feedback ?? [],  ['form-check-input']))
	type="{{ $type }}"
	value="{{ $value }}"
	name="{{ $name }}"
	
	@if(
		(old() && $value == old($name))
		||
		(!old() && isset($checked) && $checked)
	)
		checked 
	@endif
			
	id="{{ $id_check }}">
	
	<label class="form-{{ $type }}-label cursor-pointer w-100 mt-1 ms-2" for="{{ $id_check }}">
		{{ $slot }}
	</label>
</div> --}}