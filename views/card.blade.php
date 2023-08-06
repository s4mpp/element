<div class="px-3 pt-3 rounded border-0 bg-white mb-3">
    @if($title)
        <div class="card-body">
            <h6 class="mb-3"><strong>{{ $title }}</strong></h6>
        </div>
    @endif
	
    {{ $slot }}
</div>
