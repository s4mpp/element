<input {{ $attributes }} class="form-input" type="{{ $type }}" wire:loading.attr="disabled" value="{{ $value ?? $slot }}">