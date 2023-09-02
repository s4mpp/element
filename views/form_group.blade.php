<div>
    @if(!empty($title))
        <label for="{{ $id }}" class="mb-2 block text-sm font-medium text-gray-900">{{ $title }}</label>
    @endif
        
    @if($view_input)
        @include('element::'.$view_input)
    @else
        {{ $slot }}
    @endif
        
</div>