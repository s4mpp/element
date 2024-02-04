@php
    switch ($color) {
        case 'red':
            $bg_color = 'bg-red-100';
            $text_color = 'text-red-600';
            $fill_color = 'fill-red-400';
            $ring_color = 'ring-red-500/10';
            break;
        case 'yellow':
            $bg_color = 'bg-yellow-100';
            $text_color = 'text-yellow-600';
            $fill_color = 'fill-yellow-400';
            $ring_color = 'ring-yellow-500/10';
            break;
        case 'green':
            $bg_color = 'bg-green-100';
            $text_color = 'text-green-600';
            $fill_color = 'fill-green-400';
            $ring_color = 'ring-green-500/10';
            break;
        case 'blue':
            $bg_color = 'bg-blue-100';
            $text_color = 'text-blue-600';
            $fill_color = 'fill-blue-400';
            $ring_color = 'ring-blue-500/10';
            break;
        case 'indigo':
            $bg_color = 'bg-indigo-100';
            $text_color = 'text-indigo-600';
            $fill_color = 'fill-indigo-400';
            $ring_color = 'ring-indigo-500/10';
            break;
        case 'purple':
            $bg_color = 'bg-purple-100';
            $text_color = 'text-purple-600';
            $fill_color = 'fill-purple-400';
            $ring_color = 'ring-purple-500/10';
            break;
        case 'pink':
            $bg_color = 'bg-pink-100';
            $text_color = 'text-pink-600';
            $fill_color = 'fill-pink-400';
            $ring_color = 'ring-pink-500/10';
            break;
        case 'orange':
            $bg_color = 'bg-orange-100';
            $text_color = 'text-orange-600';
            $fill_color = 'fill-orange-400';
            $ring_color = 'ring-orange-500/10';
            break;
        
        default:
            $bg_color = 'bg-gray-100';
            $text_color = 'text-gray-600';
            $fill_color = 'fill-gray-400';
            $ring_color = 'ring-gray-500/10';
            break;
    }
@endphp

<span class="element--badge inline-flex whitespace-nowrap items-center gap-x-1.5 h-6 rounded-full {{ $bg_color }} px-2 py-1 text-xs font-medium {{ $text_color }} ring-1 ring-inset {{ $ring_color }}">
        
    @if($loadingText)
        <svg class="h-1.5 w-1.5 {{ $fill_color }} animate-ping element--badge-loading" viewBox="0 0 6 6" aria-hidden="true">
            <circle cx="3" cy="3" r="3" />
        </svg>

        {{ $loadingText }}
    @else
        <svg class="h-1.5 w-1.5 {{ $fill_color }}" viewBox="0 0 6 6" aria-hidden="true">
            <circle cx="3" cy="3" r="3" />
        </svg>

        <span class="element--badge-content">
            {{ $slot }}
        </span>
    @endif
</span>
