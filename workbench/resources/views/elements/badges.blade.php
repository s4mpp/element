@extends('layout.html')

@section('subtitle', 'Badges')

@section('body')

	@php
		$colors = [
			null,
			'red',
			'yellow',
			'green',
			'blue',
			'indigo',
			'purple',
			'pink',
			'orange',
		];
	@endphp

	<div>
		<h2 class="font-semibold mb-1">No color</h2>
		<div class="space-y-4">
			<x-element::badge  />
			<x-element::badge>With label</x-element::badge>
			<x-element::badge loadingText="Please wait...">With loading</x-element::badge>
		</div>
	</div>

	<div>
		<h2 class="font-semibold mb-1">With color</h2>
		<div class="space-y-4">
			@foreach($colors as $color)
				<x-element::badge :color=$color >{{ $color ?? 'null value' }}</x-element::badge>
			@endforeach
		</div>
	</div>

	<div>
		<h2 class="font-semibold mb-1">With label</h2>
		<div class="space-y-4">
			@foreach($colors as $color)
				<x-element::badge :color=$color >Label</x-element::badge>
			@endforeach
		</div>
	</div>

	<div>
		<h2 class="font-semibold mb-1">With loading</h2>
		<div class="space-y-4">
			@foreach($colors as $color)
				<x-element::badge :color=$color loadingText="Please wait...">{{ $color ?? 'null value' }}</x-element::badge>
			@endforeach
		</div>
	</div>


@endsection