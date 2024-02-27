@php
	$attributes['id'] = $attributes->get('id', 'input'.rand());
@endphp

<x-element::form.container title="{{ $title ?? null }}" required="{{ $attributes->get('required') }}" idInput="{{ $attributes->get('id') }}">
	<x-element::form.input-container>
		<select 
		{{ $attributes->merge(($multiple) ? ['multiple' => true] : [])
			->merge(['class' => ($multiple) ? 'form-multiselect' : 'form-select'])
			->merge(['class' => '
				px-2 py-1
				border-none
				w-full
				rounded
				text-gray-900
				focus:ring-0
				placeholder:text-gray-400 sm:text-sm sm:leading-6']) 
			}}>
            <option value="">Selecione...</option>
        
            {{ $slot }}
        </select>
	</x-element::form.input-container>
</x-element::form.container>