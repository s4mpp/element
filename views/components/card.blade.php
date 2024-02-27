<div {{ $attributes->class(['element--card', 'overflow-hidden', 'sm:rounded-lg', 'border']) }} >
    @if($title)
        <div class="element--card-title border-b border-gray-200 px-4 py-5 sm:px-6 flex flex-start items-center gap-4">
            <h3 class="text-base font-semibold leading-6 text-gray-900">{{ $title }}</h3>

            @isset($header)
                <div {{ $header->attributes->class(['flex-1', '-mt-5', '-mb-5']) }} >
                    {{ $header }}
                </div>
            @endisset
        </div>
    @endif

    <div  @class(['element--card-content', 'px-4 py-5 sm:px-6' => $padding])>
        {{ $slot }}
    </div>
</div>
  