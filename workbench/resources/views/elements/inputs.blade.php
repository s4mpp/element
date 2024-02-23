@extends('layout.html')

@section('subtitle', 'Inputs')

@section('body')

	<div>
		<div class="space-y-4" >
			<h2 class="font-semibold mb-1">Basic</h2>
			<div class="space-y-4">
								
				<x-element::form.input title="Input text (default)" />
				
				<x-element::form.textarea title="Textarea" placeholder="Lorem	" />
				
				<x-element::form.select title="Select">
					<option value="">Option 1</option>
					<option value="">Option 2</option>
					<option value="">Option 3</option>
					<option value="">Option 4</option>
				</x-element::form.select>
				
				<x-element::form.select title="Select Multiple" multiple >
					<option value="">Option 1</option>
					<option value="">Option 2</option>
					<option value="">Option 3</option>
					<option value="">Option 4</option>
				</x-element::form.select>
				
				<x-element::form.radio title="Radio">
					<x-element::form.radio.item>Option 1</x-element::form.radio.item>
					<x-element::form.radio.item>Option 2</x-element::form.radio.item>
					<x-element::form.radio.item>Option 3</x-element::form.radio.item>
					<x-element::form.radio.item>Option 4</x-element::form.radio.item>
				</x-element::form.radio>
				
				<x-element::form.checkbox title="Checkbox">
					<x-element::form.checkbox.item>Option 1</x-element::form.checkbox.item>
					<x-element::form.checkbox.item>Option 2</x-element::form.checkbox.item>
					<x-element::form.checkbox.item>Option 3</x-element::form.checkbox.item>
					<x-element::form.checkbox.item>Option 4</x-element::form.checkbox.item>
				</x-element::components.form.checkbox>
			</div>
		</div>
	</div>


	
@endsection