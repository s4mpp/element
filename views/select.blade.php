<select {{ $attributes }} @class(array_merge([$className], [
    'form-input',
    'block',
    'w-full',
    'rounded-md',
    'border-0',
    'py-1.5',
    'pl-3',
    'pr-10',
    'text-gray-900',
    'ring-1',
    'ring-inset',
    'ring-gray-300',
    'focus:ring-2',
    'sm:text-sm',
    'sm:leading-6',
    'transition ease-linear duration-200',
    'disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500 disabled:ring-gray-200'
]))
    name="{{ $name }}"
    @if ($required) required="{{ $required }}"   @endif
    id="{{ $id }}">

    <option value="">Selecione...</option>

    {{ $slot }}
</select>
