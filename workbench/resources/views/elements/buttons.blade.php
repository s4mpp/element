@extends('layout.html')

@section('subtitle', 'Buttons')

@section('body')
	<div>
		<h2 class="font-semibold mb-1">Mini</h2>
		<div class="space-y-4">
			<x-element::button size="mini">Button</x-element::button>
			<x-element::button size="mini">With html <del>test</del></x-element::button>
			<x-element::button size="mini" disabled>Disabled</x-element::button>
			
			<x-element::button size="mini" loading x-data="{loading: true}">Loading</x-element::button>
			
			<x-element::button size="mini" loading x-data="{loading: false}" x-on:click="loading = true">Loading on click</x-element::button>
		</div>
	</div>
	
	<div>
		<h2 class="font-semibold mb-1">Default</h2>
		<div class="space-y-4">
			<x-element::button>Button</x-element::button>
			<x-element::button>With html <del>test</del></x-element::button>
			<x-element::button disabled>Disabled</x-element::button>
			
			<x-element::button loading x-data="{loading: true}">Loading</x-element::button>
			
			<x-element::button loading x-data="{loading: false}" x-on:click="loading = true">Loading on click</x-element::button>
		</div>
	</div>


	<div>
		<h2 class="font-semibold mb-1">Large</h2>
		<div class="space-y-4">
			<x-element::button size="large">Button</x-element::button>
			<x-element::button size="large">With html <del>test</del></x-element::button>
			<x-element::button size="large" disabled>Disabled</x-element::button>
			
			<x-element::button size="large" loading x-data="{loading: true}">Loading</x-element::button>
			
			<x-element::button size="large" loading x-data="{loading: false}" x-on:click="loading = true">Loading on click</x-element::button>
		</div>
	</div>

	<div>
		<h2 class="font-semibold mb-1">Full</h2>
		<div class="space-y-4">
			<x-element::button full>Button</x-element::button>
			<x-element::button full>With html <del>test</del></x-element::button>
			<x-element::button full disabled>Disabled</x-element::button>
			
			<x-element::button full loading x-data="{loading: true}">Loading</x-element::button>
			
			<x-element::button full loading x-data="{loading: false}" x-on:click="loading = true">Loading on click</x-element::button>
		</div>
	</div>
@endsection