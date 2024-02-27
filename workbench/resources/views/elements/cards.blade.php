@extends('layout.html')

@section('subtitle', 'Cards')

@section('body')
	<div>
		<h2 class="font-semibold mb-1">Default</h2>
		<div class="space-y-4">
			<x-element::card>Content</x-element::card>
		</div>
	</div>

	<div>
		<h2 class="font-semibold mb-1">Styled</h2>
		<div class="space-y-4">
			<x-element::card class="bg-red-100 border-red-400" title="Card title">
				content
			</x-element::card>
		</div>
	</div>


	<div>
		<h2 class="font-semibold mb-1">No padding</h2>
		<div class="space-y-4">
			<x-element::card :padding=false>Content</x-element::card>
		</div>
	</div>

	<div>
		<h2 class="font-semibold mb-1">With title</h2>
		<div class="space-y-4">
			<x-element::card title="Title">Content</x-element::card>
		</div>
	</div>

	<div>
		<h2 class="font-semibold mb-1">Slot header</h2>
		<div class="space-y-4">
			<x-element::card :padding=false title="Title">
				<x-slot:header class="bg-red-100">
					Slot Header
				</x-slot:header>

				<span>Content</span>
			</x-element::card>
		</div>
	</div>
@endsection