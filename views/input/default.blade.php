<input {{ $attributes }} @class($class_input)
wire:loading.attr="disabled" type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" value="{{ $value ?? $slot }}">