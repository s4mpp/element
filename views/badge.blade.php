
@if($color_badge)
    @php
        switch ($color_badge) {
            case 'red':
                $bg = 'bg-red-100';
                $text = 'text-red-600';
                $fill = 'fill-red-400';
                $ring = 'ring-red-500/10';
                break;
            case 'yellow':
                $bg = 'bg-yellow-100';
                $text = 'text-yellow-600';
                $fill = 'fill-yellow-400';
                $ring = 'ring-yellow-500/10';
                break;
            case 'green':
                $bg = 'bg-green-100';
                $text = 'text-green-600';
                $fill = 'fill-green-400';
                $ring = 'ring-green-500/10';
                break;
            case 'blue':
                $bg = 'bg-blue-100';
                $text = 'text-blue-600';
                $fill = 'fill-blue-400';
                $ring = 'ring-blue-500/10';
                break;
            case 'indigo':
                $bg = 'bg-indigo-100';
                $text = 'text-indigo-600';
                $fill = 'fill-indigo-400';
                $ring = 'ring-indigo-500/10';
                break;
            case 'purple':
                $bg = 'bg-purple-100';
                $text = 'text-purple-600';
                $fill = 'fill-purple-400';
                $ring = 'ring-purple-500/10';
                break;
            case 'pink':
                $bg = 'bg-pink-100';
                $text = 'text-pink-600';
                $fill = 'fill-pink-400';
                $ring = 'ring-pink-500/10';
                break;
            case 'orange':
                $bg = 'bg-orange-100';
                $text = 'text-orange-600';
                $fill = 'fill-orange-400';
                $ring = 'ring-orange-500/10';
                break;
            
            default:
                $bg = 'bg-gray-100';
                $text = 'text-gray-600';
                $fill = 'fill-gray-400';
                $ring = 'ring-gray-500/10';
                break;
        }
    @endphp
    <span class="inline-flex whitespace-nowrap items-center gap-x-1.5 h-6 rounded-full {{ $bg }} px-2 py-1 text-xs font-medium {{ $text }} ring-1 ring-inset {{ $ring }}">
        
        @if($loading)
            <svg class="h-1.5 w-1.5 {{ $fill }} animate-ping" viewBox="0 0 6 6" aria-hidden="true">
                <circle cx="3" cy="3" r="3" />
            </svg>
        @else
            <svg class="h-1.5 w-1.5 {{ $fill }}" viewBox="0 0 6 6" aria-hidden="true">
                <circle cx="3" cy="3" r="3" />
            </svg>
        @endif

        {{ $label_badge ?? $slot }}
    </span>
@else
    {{ $label_badge ?? $slot }}
@endif

