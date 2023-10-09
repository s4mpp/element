<select {{ $attributes }} @class($class_input) name="{{ $name ?? null }}" id="{{ $attributes['id'] ?? $id ?? null }}">

    <option value="">Selecione...</option>

    {{ $slot }}
</select>
