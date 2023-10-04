<div class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-cloak x-show="{{ $idModal }}">
	<div
		x-cloak
		x-show="{{ $idModal }}"
		x-transition:enter="ease-out duration-300"
		x-transition:enter-start="opacity-0"
		x-transition:enter-end="opacity-100"
		x-transition:leave="ease-in duration-200"
		x-transition:leave-start="opacity-100"
		x-transition:leave-end="opacity-0"
	class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

	<div class="fixed inset-0 z-10 w-screen overflow-y-auto">
	<div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

		<div
		x-cloak
		x-show="{{ $idModal }}"
		x-transition:enter="ease-out duration-300" 
		x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
		x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
		x-transition:leave="ease-in duration-200" 
		x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
		x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
		class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
		
		<div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
			<div class="sm:flex sm:items-start">
			<div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full sm:mx-0 sm:h-10 sm:w-10 {{ $danger ? ' bg-red-100' : ' bg-gray-100' }}">
				<svg class="h-6 w-6 {{ $danger ? ' text-red-600' : ' text-gray-600' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
				</svg>
			</div>
			<div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
				<h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">{{ $title }}</h3>
				<div class="mt-2">
				<p class="text-sm text-gray-500">{{ $slot }}</p>
				</div>
			</div>
			</div>
		</div>
		<div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 gap-4">
			@if($method == 'GET')
				<div x-data="{loading: false}" >
					<x-link x-on:click="loading = true"  href="{{ $route}}" className="{{ $danger ?  'bg-red-500 hover:bg-red-600 text-white' : 'btn-primary' }}">Continuar</x-link>
				</div>
			@else
				<form action="{{ $route}}" method="POST" x-data="{loading: false}" x-on:submit="loading = true" >
					@csrf
					@method($method)
					<x-button  className="{{ $danger ?  'bg-red-500 hover:bg-red-600 text-white' : 'btn-primary' }}">Continuar</x-button>
				</form>
			@endif
			<x-button type="button" x-on:click="{{ $idModal }} = false" className="ring-inset ring-1 ring-gray-200 btn-muted">Voltar</x-button>
		</div>
		</div>
	</div>
	</div>
</div>