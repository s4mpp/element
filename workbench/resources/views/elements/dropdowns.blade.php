@extends('layout.html')

@section('subtitle', 'Buttons and links')

@section('body')

		<div>
			<h2 class="font-semibold mb-1">Simple button</h2>
			<div class="space-x-4 ">
				<x-element::dropdown />
				<x-element::dropdown context="success" title="With context" />
			</div>
		</div>

		<div>
			<h2 class="font-semibold mb-1">Personalized button</h2>
			<div class="space-x-4 ">
				<x-element::dropdown >
					<x-slot:button>
						<button @click="toggleDropdown" class="w-10 h-10 bg-gray-400 rounded-full text-white flex justify-center items-center">
							<x-element::icon name="bell" class="w-5 h-5" />
						</button>
                    </x-slot:button>
					<x-slot:body class="w-24">
						<ul>
							<li class="px-3 text-nowrap">Item 1</li>
							<li class="px-3 text-nowrap">Item 2</li>
							<li class="px-3 text-nowrap">Item 3</li>
						</ul>
					</x-slot:body>
				</x-element::dropdown>
			</div>
		</div>
	
		<div>
			<h2 class="font-semibold mb-1">With body</h2>
			<div class="space-x-4">
				<x-element::dropdown title="Simple list">
					<x-slot:body>
						<ul>
							<li class="px-3">Item 1</li>
							<li class="px-3">Item 2</li>
							<li class="px-3">Item 3</li>
						</ul>
					</x-slot:body>
				</x-element::dropdown>

				<x-element::dropdown title="Big menu">
					<x-slot:body>
						<div class="flex justify-between gap-4 py-2 px-4">
							<div class="bg-gray-200 rounded-md h-20 w-20"></div>
							<div class="bg-gray-200 rounded-md h-20 w-20"></div>
							<div class="bg-gray-200 rounded-md h-20 w-20"></div>
						</div>
					</x-slot:body>
				</x-element::dropdown>

				<x-element::dropdown title="Menu right" position="right">
					<x-slot:body>
						<div class="flex justify-between gap-4 py-2 px-4">
							<div class="bg-gray-200 rounded-md h-20 w-20"></div>
							<div class="bg-gray-200 rounded-md h-20 w-20"></div>
							<div class="bg-gray-200 rounded-md h-20 w-20"></div>
						</div>
					</x-slot:body>
				</x-element::dropdown>

				<x-element::dropdown title="Dropdown buttons" >
					<x-slot:body>
						<x-element::dropdown.button>Button</x-element::dropdown.button>
						<x-element::dropdown.button :danger=true>Button danger</x-element::dropdown.button>

						<x-element::dropdown.button disabled>Button disabled</x-element::dropdown.button>
						<x-element::dropdown.button disabled :danger=true>Button danger  disabled</x-element::dropdown.button>
					</x-slot:body>
				</x-element::dropdown>

				<x-element::dropdown title="Dropdown links" >
					<x-slot:body>
						<x-element::dropdown.link href="#">Link</x-element::dropdown.link>
						<x-element::dropdown.link :danger=true href="#">Link danger</x-element::dropdown.link>

					</x-slot:body>
				</x-element::dropdown>
			</div>
		</div>
		
@endsection