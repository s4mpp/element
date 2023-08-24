<div class="overflow-hidden bg-white shadow sm:rounded-lg">
    @if($title)
        <div class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
            <h3 class="text-base font-semibold leading-6 text-gray-900">{{ $title }}</h3>
        </div>
    @endif

    {{ $slot }}
</div>
  