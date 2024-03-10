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
		<x-element::empty-state :message=$empty_message />
	@endif
</div>