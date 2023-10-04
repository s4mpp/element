<select {{ $attributes }} @class($class_input) name="{{ $name }}" id="{{ $id }}">

    <option value="">Selecione...</option>

    {{ $slot }}
</select>
