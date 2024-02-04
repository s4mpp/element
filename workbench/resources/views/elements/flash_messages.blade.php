@extends('layout.html')

@section('subtitle', 'Flash messages')

@section('body')

    <div>
		<a href="{{ route('dispatch_flash_message') }}" class="rounded bg-indigo-600 px-2  py-1 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Dispatch flash message</a>

		<div class="space-y-4 mt-4">
			<x-element::message.flash />
			<x-element::message.flash key="info" />
			<x-element::message.flash key="warning-message" type="warning" />
			<x-element::message.flash key="error-message" type="danger" />
			<x-element::message.flash key="info-message" type="info" />
		</div>
	</div>
@endsection