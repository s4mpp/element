@extends('layout.html')

@section('subtitle', 'Modals')

@section('body')

	<div>
		<div class="space-y-4" >
			<h2 class="font-semibold mb-1">Basic modal</h2>
			<div x-data="{basicModal: false, modalWithTitle: false, modalWithTitleAndSubtitle: false, modalWithSubtitleWithoutTitle: false}">
				<x-element::button x-on:click="basicModal = true">Without title</x-element::button>
				<x-element::modal idModal="basicModal">content</x-element::modal>
				
				<x-element::button x-on:click="modalWithTitle = true">With title</x-element::button>
				<x-element::modal title="Title" idModal="modalWithTitle">content</x-element::modal>

				<x-element::button x-on:click="modalWithTitleAndSubtitle = true">With title and subtitle</x-element::button>
				<x-element::modal title="Title" subtitle="Subtitle modal" idModal="modalWithTitleAndSubtitle">content</x-element::modal>

				<x-element::button x-on:click="modalWithSubtitleWithoutTitle = true">With subtitle whithout title</x-element::button>
				<x-element::modal subtitle="Subtitle modal" idModal="modalWithSubtitleWithoutTitle">content</x-element::modal>
			</div>
		</div>
	</div>


	<div>
		<div class="space-y-4" >
			<h2 class="font-semibold mb-1">Danger modal</h2>
			<div x-data="{basicModal: false, modalWithTitle: false, modalWithTitleAndSubtitle: false, modalWithSubtitleWithoutTitle: false}">
				<x-element::button x-on:click="basicModal = true">Without title</x-element::button>
				<x-element::modal danger idModal="basicModal">content</x-element::modal>
				
				<x-element::button x-on:click="modalWithTitle = true">With title</x-element::button>
				<x-element::modal danger title="Title" idModal="modalWithTitle">content</x-element::modal>

				<x-element::button x-on:click="modalWithTitleAndSubtitle = true">With title and subtitle</x-element::button>
				<x-element::modal danger title="Title" subtitle="Subtitle modal" idModal="modalWithTitleAndSubtitle">content</x-element::modal>

				<x-element::button x-on:click="modalWithSubtitleWithoutTitle = true">With subtitle whithout title</x-element::button>
				<x-element::modal danger subtitle="Subtitle modal" idModal="modalWithSubtitleWithoutTitle">content</x-element::modal>
			</div>
		</div>
	</div>

	


@endsection