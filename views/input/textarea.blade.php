<textarea @class($class_input) {{ $attributes }} name="{{ $name ?? null }}" id="{{ $attributes['id'] ?? $id ?? null }}">{{ old($name) ?? $slot }}</textarea>
