<div @class(array_merge([$className], ['element-card', 'overflow-hidden', 'sm:rounded-lg']))>
    @if($title)
        <div class="border-b border-gray-200 px-4 py-5 sm:px-6">
            <h3 class="text-base font-semibold leading-6 text-gray-900">{{ $title }}</h3>
        </div>
    @endif

    <div @class(['px-4 py-5 sm:px-6' => $padding])>

        {{ $slot }}
    </div>

</div>
  