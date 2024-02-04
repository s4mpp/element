<select {{ $attributes->merge(($multiple) ? ['multiple' => true] : [])->merge(['class' => ($multiple) ? 'form-multiselect' : 'form-select']) }}>
    <option value="">Selecione...</option>

    {{ $slot }}
</select>
