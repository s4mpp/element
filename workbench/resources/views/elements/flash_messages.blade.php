@extends('layout.html')

@section('subtitle', 'Flash messages')

@section('body')

<div>
	<a href="{{ route('dispatch_flash_message') }}" class="rounded   bg-indigo-600 px-2 py-1 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Dispatch flash message</a>

	<div class="space-y-4 clear-both mt-4">
		<div>
			<h2 class="font-semibold mb-1"> (key message / type info)</h2>
			<div class="space-y-4">
				<x-element::message.flash  key="message" />
			</div>
		</div>

		<div>
			<h2 class="font-semibold mb-1">Inexistent key</h2>
			<div class="space-y-4 border-dashed border border-gray-700 p-2 rounded-lg">
				<x-element::message.flash key="invalid-key" />
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
			<h2 class="font-semibold mb-1">Invalid type (turns to info)</h2>
			<div class="space-y-4">
				<x-element::message.flash key="error-message" type="xxxxx" />
			</div>
		</div>


		<div>
			<h2 class="font-semibold mb-1">All keys (default)</h2>
			<div class="space-y-4">
				<x-element::message.flash />
			</div>
		</div>
	</div>
</div>




@endsection