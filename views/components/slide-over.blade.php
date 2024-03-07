<div x-cloak x-show="{{ $idSlide }}" class="--element-slide-over-backdrop absolute z-50" aria-labelledby="slide-over-title" role="dialog" aria-modal="true" >

	<div
	x-show="{{ $idSlide }}"
	x-transition:enter="ease-in-out duration-500"
	x-transition:enter-start="opacity-0"
	x-transition:enter-end="opacity-100"
	x-transition:leave="ease-in-out duration-500"
	x-transition:leave-start="opacity-100"
	x-transition:leave-end="opacity-0"
	x-on:click="{{ $idSlide }} = false"
	class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
  
	  <div class="absolute inset-0 overflow-hidden">
		<div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">

		  <div
			x-show="{{ $idSlide }}"
			x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
			x-transition:enter-start="translate-x-full"
			x-transition:enter-end="translate-x-0"
			x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
			x-transition:leave-start="translate-x-0"
			x-transition:leave-end="translate-x-full"
		   class="pointer-events-auto relative w-screen max-w-md">

			<div
				x-show="{{ $idSlide }}"
				x-transition:enter="ease-in-out duration-500"
				x-transition:enter-start="opacity-0"
				x-transition:enter-end="opacity-100"
				x-transition:leave="ease-in-out duration-500"
				x-transition:leave-start="opacity-100"
				x-transition:leave-end="opacity-0"
			 class="absolute left-0 top-0 -ml-8 flex pr-2 pt-4 sm:-ml-10 sm:pr-4">
			  <button x-on:click="{{ $idSlide }} = false" type="button" class="--element-slide-over-button-close relative rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
				<span class="absolute -inset-2.5"></span>
				<span class="sr-only">Close panel</span>
				<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
				  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
				</svg>
			  </button>
			</div>
  
			<div class="flex h-full flex-col overflow-y-scroll bg-white py-6 shadow-xl --element-slide-over-dialog">
				@isset($title)
					<div class="px-4 sm:px-6">
						<h2 class="text-base font-semibold leading-6 text-gray-900" class="--element-slide-over-title">{{ $title }}</h2>
					</div>
				@endisset
			  <div class="relative mt-6 flex-1 px-4 sm:px-6 --element-slide-over-content">
				{{ $slot }}
			  </div>
			</div>
		  </div>
		</div>
	  </div>
  </div>