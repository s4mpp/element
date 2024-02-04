<x-element::form.container title="{{ $title ?? null }}">
	<x-element::form.input-container>
		<select {{ $attributes->merge(($multiple) ? ['multiple' => true] : [])->merge(['class' => ($multiple) ? 'form-multiselect' : 'form-select']) }}>
            <option value="">Selecione...</option>
        
            {{ $slot }}
        </select>
	</x-element::form.input-container>
</x-element::form.container>