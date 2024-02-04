@extends('layout.html')

@section('title', 'Home')

@section('body')

	@foreach([
		'badges' => 'Badges',
		'buttons' => 'Buttons',
		'cards' => 'Cards',
		'icons' => 'Icons',
		'modals' => 'Modals',
		'slide-overs' => 'Slide overs',
		'inputs' => 'Inputs',
		'alerts' => 'Alerts',
		'flash_messages' => 'Flash messages',
		'error_messages' => 'Error messages',
	] as $route => $title)
		<a href="{{ route($route) }}" class="">
			<div class="border rounded-lg p-2 bg-gray-50 hover:bg-gray-100 my-4">
				{{ $title }}
			</div>
		</a>
	@endforeach
@endsection