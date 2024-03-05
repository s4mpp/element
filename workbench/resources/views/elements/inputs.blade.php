@extends('layout.html')

@section('subtitle', 'Inputs')

@section('body')

	<div class="space-y-4">
		<div>
			<h2 class="font-semibold mb-1">Basic Input</h2>
			<div class="space-y-4">
				<x-element::form.input id="id-def" title="Input text (default)" />
				<x-element::form.input title="Input required" required />
				<x-element::form.input title="Input with placeholder" placeholder="Placeholder text" />

				<div class="flex border items-center ">
					<x-element::form.input placeholder="with button" required />
					<x-element::button>Button</x-element::button>
				</div>
				
				<x-element::form.input autocomplete="new-password" type="password" title="Password">
					<x-slot:end>
						<x-element::form.show-password-button/>
					</x-slot:end>
				</x-element::form.input>
			</div>
		</div>

		<div>
			<h2 class="font-semibold mb-1">Textarea</h2>
			<div class="space-y-4">
				<x-element::form.textarea title="Textarea placeholder" placeholder="Lorem	" />
				<x-element::form.textarea title="Textarea required" required />
			</div>
		</div>

		<div>
			<h2 class="font-semibold mb-1">Select</h2>
			<div class="space-y-4">
				<x-element::form.select title="Select default">
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
			</div>
		</div>

		<div>
			<h2 class="font-semibold mb-1">Radio</h2>
			<div class="space-y-4">
				<x-element::form.radio title="Radio">
					<x-element::form.radio.item>Option 1</x-element::form.radio.item>
					<x-element::form.radio.item>Option 2</x-element::form.radio.item>
					<x-element::form.radio.item>Option 3</x-element::form.radio.item>
					<x-element::form.radio.item>Option 4</x-element::form.radio.item>
				</x-element::form.radio>
			</div>
		</div>

		<div>
			<h2 class="font-semibold mb-1">Checkbox</h2>
			<div class="space-y-4">
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