<div @class([
	'element--alert rounded-md p-4 border',
	'bg-gray-50 border-gray-300' => $is_default,
	'bg-green-50 border-green-300' => $is_success,
	'bg-red-50 border-red-300' => $is_danger,
	'bg-yellow-50 border-yellow-300' => $is_warning,
	'bg-blue-50 border-blue-300' => $is_info
])>
	<div class="flex">
		@if($is_success)
			<div class="flex-shrink-0 mr-3 element--alert-success">
				<svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
				</svg>
			</div>
		@endif

		@if($is_danger)
			<div class="flex-shrink-0 mr-3 element--alert-danger">
				<svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
				</svg>
			</div>
		@endif
		
		@if($is_warning)
			<div class="flex-shrink-0 mr-3 element--alert-warning">
				<svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					<path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
				</svg>
			</div>
		@endif
		
		@if($is_info)
			<div class="flex-shrink-0 mr-3 element--alert-info">
				<svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd" />
				</svg>
			</div>
		@endif
		
		<div>
			@if($title)
				<h3 @class([
					'element--alert-title text-sm mb-2 font-medium',
					'text-gray-800' => $is_default,
					'text-green-800' => $is_success,
					'text-red-800' => $is_danger,
					'text-yellow-800' => $is_warning,
					'text-blue-800' => $is_info,
				])>
					{{ $title }}
				</h3>
			@endif
			<div @class([
				'element--alert-content text-sm',
				'text-gray-700' => $is_default,
				'text-green-700' => $is_success,
				'text-red-700' => $is_danger,
				'text-yellow-700' => $is_warning,
				'text-blue-700' => $is_info,
			])>
				{{ $slot }}
			</div>
		</div>
	</div>
</div>