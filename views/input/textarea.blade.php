<textarea @class($class_input) {{ $attributes }} name="{{ $name }}" id="{{ $attributes['id'] ?? $id ?? null }}">{{ old($name) ?? $slot }}</textarea>
