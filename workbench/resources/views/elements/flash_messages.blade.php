@extends('layout.html')

@section('subtitle', 'Flash messages')

@section('body')

<div>
	<a href="{{ route('dispatch_flash_message') }}" class="rounded   bg-indigo-600 px-2 py-1 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Dispatch flash message</a>

	<div class="space-y-4 clear-both mt-4">
		<div>
			<h2 class="font-semibold mb-1">No key / No type  (key message / type info)</h2>
			<div class="space-y-4">
				<x-element::message.flash />
			</div>
		</div>

		<div>
			<h2 class="font-semibold mb-1">Success</h2>
			<div class="space-y-4">
				<x-element::message.flash key="success-message" type="success" />
			</div>
		</div>
		<div>
			<h2 class="font-semibold mb-1">Info</h2>
			<div class="space-y-4">
				<x-element::message.flash key="info-message" type="info" />
			</div>
		</div>
		<div>
			<h2 class="font-semibold mb-1">Warning</h2>
			<div class="space-y-4">
				<x-element::message.flash key="warning-message" type="warning" />
			</div>
		</div>
		<div>
			<h2 class="font-semibold mb-1">Danger</h2>
			<div class="space-y-4">
				<x-element::message.flash key="error-message" type="danger" />
			</div>
		</div>


		<div>
			<h2 class="font-semibold mb-1">All keys</h2>
			<div class="space-y-4">
				<x-element::message.flash all />
			</div>
		</div>
	</div>
</div>




@endsection