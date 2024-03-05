@extends('layout.html')

@section('subtitle', 'Buttons and links')

@section('body')

	<div class="flex justify-between gap-10">
		<div class="flex-1 space-y-10">
			<div>
				<h2 class="font-semibold mb-1">Mini</h2>
				<div class="space-y-4">
					<x-element::button size="mini">Button</x-element::button>
					<x-element::button size="mini" class="text-red-500">Button with class</x-element::button>
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
				<h2 class="font-semibold mb-1">Context</h2>
				<div class="space-y-4">
					<x-element::button context="default">Default</x-element::button>
					<x-element::button context="light">Light</x-element::button>
					<x-element::button context="secondary">Secondary</x-element::button>
					<x-element::button context="dark">Dark</x-element::button>
					<x-element::button context="success">Success</x-element::button>
					<x-element::button context="danger">Danger</x-element::button>
					<x-element::button context="info">Info</x-element::button>
					<x-element::button context="warning">Warning</x-element::button>
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
		</div>
		<div class="flex-1 space-y-10">
			<div>
				<h2 class="font-semibold mb-1">Mini</h2>
				<div class="space-y-4">
					<x-element::link size="mini">Link</x-element::link>
					<x-element::link size="mini">With html <del>test</del></x-element::link>
					<x-element::link size="mini" loading x-data="{loading: true}">Loading</x-element::link>
					<x-element::link size="mini" loading x-data="{loading: false}" x-on:click="loading = true">Loading on click</x-element::link>
				</div>
			</div>
			
			<div>
				<h2 class="font-semibold mb-1">Default</h2>
				<div class="space-y-4">
					<x-element::link>Link</x-element::link>
					<x-element::link>With html <del>test</del></x-element::link>
					<x-element::link loading x-data="{loading: true}">Loading</x-element::link>
					<x-element::link loading x-data="{loading: false}" x-on:click="loading = true">Loading on click</x-element::link>
				</div>
			</div>
		
		
			<div>
				<h2 class="font-semibold mb-1">Large</h2>
				<div class="space-y-4">
					<x-element::link size="large">Link</x-element::link>
					<x-element::link size="large">With html <del>test</del></x-element::link>
					<x-element::link size="large" loading x-data="{loading: true}">Loading</x-element::link>
					<x-element::link size="large" loading x-data="{loading: false}" x-on:click="loading = true">Loading on click</x-element::link>
				</div>
			</div>
		
			<div>
				<h2 class="font-semibold mb-1">Full</h2>
				<div class="space-y-4">
					<x-element::link full>Link</x-element::link>
					<x-element::link full>With html <del>test</del></x-element::link>
					<x-element::link full loading x-data="{loading: true}">Loading</x-element::link>
					<x-element::link full loading x-data="{loading: false}" x-on:click="loading = true">Loading on click</x-element::link>
				</div>
			</div>
		</div>
	</div>

	
@endsection