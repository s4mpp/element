<textarea {{ $attributes }} @class(array_merge([$className], [
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
]))
name="{{ $name }}"
id="{{ $id }}">{{ old($name) ?? $slot }}</textarea>
