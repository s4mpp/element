
@props(['start', 'end'])
@php
    $class_input = [
        'pl-10' => isset($start),
        'pr-10' => isset($end),
        'form-input', 'block', 'w-full', 'rounded-md', 'border-0', 'py-1.5', 'shadow-sm',
        'text-gray-900',
        'placeholder:text-gray-400', 'sm:text-sm', 'sm:leading-6',
        'ring-1', 'ring-inset', 'ring-gray-300',
        'focus:ring-gray-600', 
        'focus:ring-2', 'focus:ring-inset',
        'transition', 'ease-linear', 'duration-200', 
        'disabled:cursor-not-allowed', 'disabled:bg-gray-50', 'disabled:text-gray-500', 'disabled:ring-gray-200'
    ];
@endphp

<div>
    @if(!empty($title))
        <label for="{{ $id }}" class="mb-1  block text-sm font-medium text-gray-900">{{ $title }}</label>
    @endif

    <div class="relative">
        @isset($start)     
            <div class="text-gray-400 text-sm   absolute inset-y-0 left-0 flex items-start pt-2 pl-3">
                {{ $start }}
            </div>
        @endisset
        
        @include('element::input.'.$view_input, ['class_input' => $class_input])

        @isset($end)
            <div class="text-gray-400 text-sm absolute inset-y-0 right-0 flex items-start pt-2 pr-3 ">
                {{ $end }}
            </div>
        @endisset
    </div>
</div>
