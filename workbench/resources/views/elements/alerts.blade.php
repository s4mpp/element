@extends('layout.html')

@section('subtitle', 'Alerts')

@section('body')
	<div>
		<h2 class="font-semibold mb-1">Basic</h2>
		<div class="space-y-4">
			<x-element::alert>Alert default</x-element::alert>
			<x-element::alert type="success">Alert success</x-element::alert>
			<x-element::alert type="danger">Alert danger</x-element::alert>
			<x-element::alert type="warning">Alert warning</x-element::alert>
			<x-element::alert type="info">Alert info</x-element::alert>
		</div>
	</div>

	<div>
		<h2 class="font-semibold mb-1">With title</h2>
		<div class="space-y-4">
			<x-element::alert title="Lorem ipsum dolor sit amet">Alert default</x-element::alert>
			<x-element::alert title="Lorem ipsum dolor sit amet" type="success">Alert success</x-element::alert>
			<x-element::alert title="Lorem ipsum dolor sit amet" type="danger">Alert danger</x-element::alert>
			<x-element::alert title="Lorem ipsum dolor sit amet" type="warning">Alert warning</x-element::alert>
			<x-element::alert title="Lorem ipsum dolor sit amet" type="info">Alert info</x-element::alert>
		</div>
	</div>

	<div>
		<h2 class="font-semibold mb-1">Others</h2>
		<div class="space-y-4">
			<x-element::alert title="With html:" type="danger">
				<ul role="list" class="list-disc space-y-1 pl-5">
					<li>Your password must be at least 8 characters</li>
					<li>Your password must include at least one pro wrestling finishing move</li>
					</ul>
			</x-element::alert>

			<x-element::alert title="A long text" type="info">
				<div class="space-y-2">
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad accusantium placeat eius fugiat reiciendis sequi necessitatibus dolore eaque dolorum, sint debitis praesentium voluptatibus, quibusdam impedit mollitia ab tenetur molestiae explicabo.
					<p>Doloribus architecto dolorum tempore nostrum dolores molestiae voluptas id vitae vel vero optio ipsa animi dicta nesciunt nihil incidunt blanditiis autem deserunt dolore, amet omnis libero temporibus eius qui. Quidem?
					<p>Non totam, aut et obcaecati nostrum iusto porro cupiditate culpa veritatis laudantium accusantium dolore, explicabo molestias rem iure tempora doloremque. Vero accusamus excepturi nobis delectus ipsam laboriosam consequuntur quas harum.
					<p>Pariatur at exercitationem, atque nihil obcaecati mollitia consectetur facere consequatur dolore ipsa nulla beatae velit, voluptas animi numquam. Expedita, quas nostrum dolorum ab perspiciatis reprehenderit maiores sapiente error sunt nemo.
					<p>Illo dicta eius consequuntur vel eaque debitis facere. Libero voluptatem consequatur omnis minima corporis. Ipsam nisi reiciendis temporibus. Odit animi, amet recusandae dolor dicta sint tempora sequi adipisci voluptates saepe?</p>
				</div>
			</x-element::alert>
		</div>
	</div>
@endsection