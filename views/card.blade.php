<div class="card card-component border-0 bg-white mb-3 mx-n3 mx-md-0">
    @if($title)
        <div class="card-body pb-1">
            <h6 class="mb-0"><strong>{{ $title }}</strong></h6>
        </div>
    @endif

    <div class="card-body pb-0">
        {{ $slot }}
    </div>
</div>
