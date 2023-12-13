
@if (!empty($flash_message))
 	<div class="bg-green-100 border border-green-300 text-green-700 px-3 py-5 mb-4 rounded-md flex justify-start">
		<div class="w-5">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
				<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
		</div>
	
		<div class="ms-2 text-sm">
			<span>{!! $flash_message !!}</span>
		</div>
	</div>
@endif

@if($errors->any())
	<div class="bg-red-100 border border-red-300 text-red-700 px-3 py-5 mb-4 rounded-md flex justify-start">
		<div class="w-5">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
				<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
			</svg>
		</div>

		<div class="ms-2 text-sm">
			<span>{{ $flash_message ?? 'Erros encontrados:' }}</span>
			@if($errors->all())
				<div class="mt-3">
					@foreach ($errors->all() as $error)
					<p>{!! nl2br($error) !!}</p>
					@endforeach
				</div>
			@endif
		</div>
	</div>
@endif