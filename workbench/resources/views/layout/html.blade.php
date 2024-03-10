<!DOCTYPE html>
<html class="h-full bg-white">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Element 2 | @yield('title') @yield('subtitle')</title>

		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="stylesheet" href="{{ asset('vendor/element/style.css') }}">
	</head>
	<body class="h-full">
		<div class="container mx-auto my-4 px-4">

			<h1 class="text-gray-700 text-lg font-semibold mb-7 border-b  flex justify-start items-center">
				@yield('title')
				
				@hasSection('subtitle')
					<a class="hover:bg-gray-100 rounded px-2 py-1 text-sm me-3" href="{{ route('home') }}">&laquo; Back</a>
					@yield('subtitle')
				@endif
			</h1>

			<div class="space-y-10">
				@yield('body')
			</div>
		</div>

		<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js"></script>
	</body>
</html>
