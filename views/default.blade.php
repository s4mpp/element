<input {{ $attributes }} @class(array_merge([$className], [
        'focus:ring-gray-600',
        'form-input',
        'block',
        'w-full',
        'rounded-md',
        'border-0',
        'py-1.5',
        'text-gray-900',
        'shadow-sm',
        'ring-1',
        'ring-inset',
        'ring-gray-300',
        'placeholder:text-gray-400',
        'focus:ring-2',
        'focus:ring-inset',
        'sm:text-sm',
        'sm:leading-6',
        'transition ease-linear duration-200',
        'disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500 disabled:ring-gray-200'
]))
wire:loading.attr="disabled"
type="{{ $type }}"
name="{{ $name }}"
@if ($required) required="{{ $required }}"   @endif
@if ($accept) accept="{{ $accept }}"   @endif
id="{{ $id }}"
value="{{ $value ?? $slot }}">