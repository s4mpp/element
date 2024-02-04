@extends('layout.html')

@section('subtitle', 'Slide overs')

@section('body')

<div>
	<div class="space-y-4" >
		<h2 class="font-semibold mb-1">Basic slide</h2>
		<div x-data="{basicSlideOver: false, slideOverWithTitle: false, slideOverWithModal: false}">
			<x-element::button x-on:click="basicSlideOver = true">Without title</x-element::button>
			<x-element::slide-over idSlide="basicSlideOver">content</x-element::slide-over>
			
			<x-element::button x-on:click="slideOverWithTitle = true">With title</x-element::button>
			<x-element::slide-over title="Title" idSlide="slideOverWithTitle">content</x-element::slide-over>

			<x-element::button x-on:click="slideOverWithModal = true">With modal</x-element::button>
			<x-element::slide-over title="Title" idSlide="slideOverWithModal">
				
				<div x-data="{modalInSlideOver: false}">
					<x-element::button x-on:click="modalInSlideOver = true">Open modal</x-element::button>
					<x-element::modal idModal="modalInSlideOver">content</x-element::modal>
				</div>
			</x-element::slide-over>
		</div>
	</div>
</div>
	
@endsection