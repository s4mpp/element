@props(['start', 'end'])

<div class="bg-red-100 min-h-[66px]">
    @if(!empty($title))
        <label for="{{ $id ?? null }}" class="mb-1  block text-sm font-medium text-gray-900">{{ $title ?? '' }}</label>
    @endif

    <div class="relative ">
        @isset($view_input)
            <div class="flex bg-green-100 form-input justify-between items-center --element-input-container">

            
            @isset($start)     
                <div>
                    {{ $start }}
                </div>
            @endisset
            
            <div class="flex-1">
                @include('element::components.form.'.$view_input)
            </div>

            @isset($end)
                <div>
                    {{ $end }}
                </div>
            @endisset


            {{-- @php
                $class_input = array_merge(explode(' ', $className), [
                    'form-input'
                    // 'pl-10' => isset($start),
                    // 'pr-10' => isset($end),
                    // 'form-input', 'block', 'w-full', 'rounded-md', 'border-0', 'py-1.5', 'shadow-sm',
                    // 'text-gray-900',
                    // 'placeholder:text-gray-400', 'sm:text-sm', 'sm:leading-6',
                    // 'ring-1', 'ring-inset', 'ring-gray-300',
                    // 'focus:ring-gray-600', 
                    // 'focus:ring-2', 'focus:ring-inset',
                    // 'transition', 'ease-linear', 'duration-200', 
                    // 'disabled:cursor-not-allowed', 'disabled:bg-gray-50', 'disabled:text-gray-500', 'disabled:ring-gray-200'
                ]);
            @endphp --}}
            
            
            
            {{-- @include('element::input.'.$view_input) --}}
            
            </div>
        @else
            {{ $slot }}
        @endif
    </div>
</div>
