@aware(['name'])

<option  
    @if(
        (old() && $value == old($name))
        ||
        (!old() && isset($selected) && $selected)
    )
        selected 
    @endif

value="{{ $value }}">{{ $slot }}</option>
