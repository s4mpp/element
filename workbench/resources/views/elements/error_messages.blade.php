@extends('layout.html')

@section('subtitle', 'Error messages')

@section('body')

	<div>
		<a href="{{ route('dispatch_error_message') }}" class="rounded   bg-indigo-600 px-2 py-1 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Dispatch error message</a>

		<div class="space-y-4 clear-both mt-4">
			<div>
				<h2 class="font-semibold mb-1">key default</h2>
				<div class="space-y-4">
					<x-element::message.error key="default" />
				</div>
			</div>

			<div>
				<h2 class="font-semibold mb-1">With title</h2>
				<div class="space-y-4">
					<x-element::message.error title="Example title" />
				</div>
			</div>

			<div>
				<h2 class="font-semibold mb-1">With specific key (key=exception-message)</h2>
				<div class="space-y-4">
					<x-element::message.error  key="exception-message" />
				</div>
			</div>

			<div>
				<h2 class="font-semibold mb-1">With all keys (default)</h2>
				<div class="space-y-4">
					<x-element::message.error title="All errors:"  />
				</div>
			</div>

			<div>
				<h2 class="font-semibold mb-1">With provider</h2>
				<div class="space-y-4">
					<x-element::message.error title="All errors:" :provider=$errors  />
				</div>
			</div>
		</div>
	</div>
@endsection