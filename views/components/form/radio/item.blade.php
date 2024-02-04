@php
	$radio_id = 'radio_'.rand();
@endphp
<div class="flex justify-start items-start pt-[6px] min-h-[36px]">
	<div class="flex h-6 items-center">
		<input type="radio" class="form-radio" id="{{ $radio_id }}">
	</div>
	<div class="text-sm leading-6 ">
		<label class="font-medium text-gray-900 w-full cursor-pointer py-1.5" for="{{ $radio_id }}">
			<div class="ml-2  mr-5">
				{{ $slot }}
			</div>
		</label>
	</div>
</div>