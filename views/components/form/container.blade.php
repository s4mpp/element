<div class="bg-red-100 min-h-[66px] element--input-container">
    @if(!empty($title))
        <label for="{{ $id ?? null }}" class="element--input-label mb-1 block text-sm font-medium text-gray-900">{{ $title }}</label>
    @endif

    <div class="relative ">
        {{ $slot }}
    </div>
</div>
