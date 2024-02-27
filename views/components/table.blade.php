<div class="--element-main-table">
	@isset($body)
		<table class="min-w-full divide-y divide-gray-100 --element-table">
			@isset($header)
				<thead class="border-b rounded text-left border-gray-300 --element-table-thead">
					<tr>
						{{ $header }}
					</tr>
				</thead>
			@endisset
			<tbody class="divide-y divide-gray-200 bg-white --element-table-tbody">
				{{ $body }}
			</tbody>
		</table>
	@else
		<div class="text-center py-12 bg-gray-50 text-gray-500 text-sm --element-table-empty">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="mx-auto fill-gray-100 w-10 h-10 opacity-90">
				<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
			
			<span  class="text-sm mt-3">Nenhum registro</span>
		</div>
	@endif
</div>