<div class="element--modal-backdrop fixed z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-cloak x-show="{{ $idModal }}">
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
	<div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">

		<div
			x-cloak
			x-show="{{ $idModal }}"
			x-transition:enter="ease-out duration-300" 
			x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
			x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
			x-transition:leave="ease-in duration-200" 
			x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
			x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
			class="element--modal-dialog relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
			
			<div class="bg-white px-4 pt-5 sm:p-6 sm:pb-4 mb-4 border-b">
				<div class="flex justify-start align-center items-center">
					
					@if($danger)
						<div class="element--modal-danger-icon mx-auto sm:mr-4 flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full sm:mx-0 sm:h-10 sm:w-10 {{ $danger ? ' bg-red-100' : ' bg-gray-100' }}">
							<svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
							</svg>
						</div>
					@endif
					
					<div class="text-center w-full sm:text-left">
						@if($title)
							<div class="flex w-full justify-between items-center">
								<h3 class="text-base font-semibold text-gray-900 --element--modal-title">{{ $title }}</h3>
							</div>
						@endif
					</div>
					
					<button x-on:click="{{ $idModal }} = false" type="button" class="--element--modal-button-close text-gray-500 p-2 hover:text-gray-700 transition-colors">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
							<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</button>
				</div>
			</div>

			<div class="bg-white px-4 pb-6 sm:px-6">

				@if($subtitle)
					<div class="mt-0 --element--modal-subtitle text-center py-4">
						<p class="text-base text-gray-700">{{ $subtitle }}</p>
					</div>
				@endif

				{{ $slot }}
			</div>
		</div>
	</div>
	</div>
</div>