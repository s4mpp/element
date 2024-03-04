@php
	$radio_id = 'radio_'.rand();
@endphp
<div class="flex justify-start items-start pt-[6px] min-h-[36px]">
	<div class="flex h-6 items-center">
		<input {{ $attributes }} type="radio" class="form-radio h-4 w-4 border-gray-300 focus:ring-gray-800 text-gray-800 cursor-pointer  radio rounded-full"  id="{{ $radio_id }}">
	</div>
	<div class="text-sm leading-6 ">
		<label class="font-medium text-gray-900 w-full cursor-pointer py-1.5" for="{{ $radio_id }}">
			<div class="ml-2  mr-5">
				{{ $slot }}
			</div>
		</label>
	</div>
</div>