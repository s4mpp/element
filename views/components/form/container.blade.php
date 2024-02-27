<div class="element--input-container">
    @if(!empty($title))
        <label for="{{ $attributes->get('idInput') }}" class="element--input-label mb-1 block text-sm font-medium text-gray-900">
            {{ $title }}
            
            @if($attributes->get('required'))
                <span class="text-red-300">*</span>
            @endif
        </label>
    @endif

    <div class="relative ">
        {{ $slot }}
    </div>
</div>
