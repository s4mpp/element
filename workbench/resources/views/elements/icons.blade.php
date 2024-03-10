@extends('layout.html')

@section('subtitle', 'Icons')

@php
	$icons = [
		'academic-cap',
		'adjustments-horizontal',
		'arrow-down-right',
		'cloud-arrow-down',
		'chat-bubble-oval-left',
		'device-phone-mobile',
		'cursor-arrow-rays',
		'at-symbol',
		'cloud',
		'minus-small',
		'chevron-right',
		'viewfinder-circle',
		'pencil',
		'flag',
		'lifebuoy',
		'truck',
		'user-group',
		'arrows-up-down',
		'calculator',
		'tv',
		'light-bulb',
		'funnel',
		'bug-ant',
		'bars-3-bottom-right',
		'pause',
		'printer',
		'star',
		'play-circle',
		'phone-arrow-up-right',
		'folder-minus',
		'bars-arrow-up',
		'hand-thumb-down',
		'power',
		'wifi',
		'gif',
		'bolt-slash',
		'map',
		'server-stack',
		'trash',
		'forward',
		'scissors',
		'receipt-refund',
		'sparkles',
		'bell-slash',
		'arrow-top-right-on-square',
		'bars-2',
		'camera',
		'document-plus',
		'lock-closed',
		'arrow-uturn-right',
		'arrows-pointing-out',
	];

	$colors = [
		'text-red-500', 'text-green-500', 'text-blue-500', 'text-orange-500', 'text-indigo-500', 
		'text-lime-500', 'text-gray-500', 'text-emerald-500', 'text-cyan-500', 'text-purple-500', 
		'text-sky-500', 'text-teal-500', 'text-amber-500', 'text-stone-500', 'text-fuchsia-500', 
	];
@endphp

@section('body')

	<div>
		<h2 class="font-semibold mb-1">Default (outline)</h2>
		<div class="space-y-4">
			<div class="flex gap-1 justify-between flex-wrap">
				@foreach($icons as $icon)
					<x-element::icon name="{{ $icon }}" class="w-12" />
				@endforeach
			</div>

			<div class="flex gap-1 justify-between flex-wrap">
				@foreach($icons as $icon)
					<x-element::icon name="{{ $icon }}"  class="w-12 h-12 bg-red-100 text-blue-500" />
				@endforeach
			</div>
		</div>
	</div>

	<div>
		<h2 class="font-semibold mb-1">Solid</h2>
		<div class="space-y-4">
			<div class="flex gap-1 justify-between flex-wrap">
				@foreach($icons as $icon)
					<x-element::icon name="{{ $icon }}" solid  class="w-5 "/>
				@endforeach
			</div>

			<div class="flex gap-1 justify-between flex-wrap">
				@foreach($icons as $icon)
					<x-element::icon name="{{ $icon }}" mini class="w-5 h-5" />
				@endforeach
			</div>
			
			<div class="flex gap-1 justify-between flex-wrap">
				@foreach($icons as $icon)
					<x-element::icon name="{{ $icon }}"  class="w-5 {{  Arr::random($colors) }}" />
				@endforeach
			</div>
		</div>
	</div>

	

	


	
@endsection