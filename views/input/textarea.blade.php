<textarea @class($class_input) {{ $attributes }} name="{{ $name }}" id="{{ $id }}">{{ old($name) ?? $slot }}</textarea>
