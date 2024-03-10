@extends('layout.html')

@section('subtitle', 'Tables')

@section('body')

	<div class="space-y-4" >
		<div>
			<h2 class="font-semibold mb-1">Basic</h2>

			<div class="border">
				<x-element::empty-state />
			</div>
			
		</div>

		<div>
			<h2 class="font-semibold mb-1">With mesasge</h2>

			<div class="border">
				<x-element::empty-state message="No registers yet" />
			</div>
			
		</div>

		<div>
			<h2 class="font-semibold mb-1">Personalized</h2>

			<div class="border">
				<x-element::empty-state class="bg-red-100 rounded-lg" />
			</div>
			
		</div>

		<div>
			<h2 class="font-semibold mb-1">With slot</h2>

			<div class="border">
				<x-element::empty-state>
					<div class="border-2 rounded-lg border-dashed border-gray-300 px-32 py-10 flex items-center justify-center">
						<x-element::button>Create new</x-element::button>
					</div>
				</x-element::empty-state>
			</div>
			
		</div>
	</div>


	
@endsection