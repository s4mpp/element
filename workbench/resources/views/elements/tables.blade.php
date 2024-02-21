@extends('layout.html')

@section('subtitle', 'Tables')

@section('body')

	<div>
		<div class="space-y-4" >
			<div>
				<h2 class="font-semibold mb-1">Basic</h2>
				
				<x-element::table>
					<x-slot:header>
						@for($i = 1; $i <= 3; $i++)
							<x-element::table.th>Title {{ $i }}</x-element::table.th>
						@endfor
						
					</x-slot:header>
			
					<x-slot:body>
						@for($k = 1; $k <= 3; $k++)
							<tr>
								@for($i = 1; $i <= 3; $i++)
									<x-element::table.td>Content {{ $k }} - {{ $i }}</x-element::table.td>
								@endfor
							</tr>
						@endfor
					</x-slot:body>
				</x-element::table>
			</div>
			
			<div>
				<h2 class="font-semibold mb-1">No Title</h2>
				
				<x-element::table>
					<x-slot:body>
						@for($k = 1; $k <= 3; $k++)
							<tr>
								@for($i = 1; $i <= 3; $i++)
									<x-element::table.td>Content {{ $k }} - {{ $i }}</x-element::table.td>
								@endfor
							</tr>
						@endfor
					</x-slot:body>
				</x-element::table>
			</div>

			<div>
				<h2 class="font-semibold mb-1">No Content</h2>
				
				<x-element::table></x-element::table>
			</div>

		</div>
	</div>


	
@endsection