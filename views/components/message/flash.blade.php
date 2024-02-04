@if($message)
	<x-element::alert type="{{ $alert_type }}">{{ $message }}</x-element::alert>
@endif