@extends('layout.html')

@section('subtitle', 'Error messages')

@section('body')

    <div>
		<a href="{{ route('dispatch_error_message') }}" class="rounded bg-indigo-600 px-2 py-1 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Dispatch error message</a>

		<div class="space-y-4 mt-4">
			<x-element::message.error />
			<x-element::message.error key="exception-message" />
			<x-element::message.error title="Any errors:"  />
			<x-element::message.error title="All errors:" all  />
		</div>
	</div>
@endsection