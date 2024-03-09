@if(!empty($messages))
	<x-element::alert type="{{ $type }}" title="{{ $title ?? null }}">
		<div class="space-y-1">
			@foreach($messages as $key => $bag)
				@foreach($bag as $message)
					<p>{!! $message !!} @env(['staging', 'testing', 'local']) <span class="pl-4 opacity-40">Key: {{ $key }}</span>@endenv</p>
				@endforeach
			@endforeach
		</div>
	</x-element::alert>
@endif