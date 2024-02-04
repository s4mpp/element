@if(!empty($messages))
	<x-element::alert type="danger" title="{{ $title }}">
		<div class="space-y-1">
			@foreach($messages as $message)
				<p>{{ $message }}</p>
			@endforeach
		</div>
	</x-element::alert>
@endif
