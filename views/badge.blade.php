@if($color)
    <span  class="badge p-0 rounded-pill bg-{{ $color }}">
        <div style="border-radius:9px; background-color: rgba(255, 255, 255, .8);" class="badge-overlay px-3 py-1 h-100 w-100 text-{{ $color }}">
            {{ $label }}
        </div>
    </span>
@else
    {{ $label }}
@endif