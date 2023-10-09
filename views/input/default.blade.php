<input {{ $attributes }} @class($class_input)
wire:loading.attr="disabled" type="{{ $type ?? '' }}" name="{{ $name ?? '' }}" id="{{ $attributes['id'] ?? $id ?? null }}" value="{{ $value ?? $slot }}">