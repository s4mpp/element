<style>
    .badge-overlay
    {
         
            border-radius:9px;
            background-color: rgba(255, 255, 255, .8);
         
    }
</style>

<span class="badge p-0 rounded-pill bg-{{ $color }}">
    <div class="badge-overlay px-3 py-1 h-100 w-100 text-{{ $color }}">
        {{ $label }}
    </div>
</span>