<div class="card card-component border-0 bg-white mb-3 mx-n3 mx-md-0">
    @if($title)
        <div class="card-body">
            <h6 class="mb-3"><strong>{{ $title }}</strong></h6>
        </div>
    @endif

    <div class="card-body pb-0">
        {{ $slot }}
    </div>
</div>
