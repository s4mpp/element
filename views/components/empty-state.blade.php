<div {{ $attributes->class(['--element-empty-state flex flex-col justify-center flex-col py-10 w-full items-center space-y-7']) }}>
	<div class=" w-full flex flex-col items-center justify-center">
		<x-element::icon class="h-12 w-12 text-gray-400 opacity-70" name="information-circle" solid mini />
		<p class="text-gray-400">{{ $message }}</p>
	</div>

	@if($slot->isNotEmpty())
		<div class="--element-empty-state-body w-full flex justify-center">
			{{ $slot }}
		</div>
	@endif
	
</div>