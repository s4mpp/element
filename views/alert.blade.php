@if (!empty($flash_message))
	<div class="alert alert-success pb-2">{{ $flash_message }}</div>
@endif

@if($errors->any())
	<div class="alert alert-danger pb-2">
		@foreach ($errors->all() as $error)
			<p class="mb-2">{!! nl2br($error) !!}</p>
		@endforeach
	</div>
@endif