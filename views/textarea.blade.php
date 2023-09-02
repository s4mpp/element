<textarea {{ $attributes }} @class(array_merge($class_feedback, [
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
        'focus:ring-flamingo-600',
        'sm:text-sm',
        'sm:leading-6',
]))
name="{{ $name }}"
id="{{ $id }}">{{ old($name) ?? $slot }}</textarea>
