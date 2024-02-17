<?php

namespace S4mpp\Element\Tests\Feature;

use S4mpp\Element\Tests\TestCase;
use Illuminate\Support\MessageBag;
use Illuminate\Support\ViewErrorBag;

class ErrorTest extends TestCase
{
	function test_dispatch_error_messages()
	{
		$view_error_bag = new ViewErrorBag();

		$view_error_bag->put('default', new MessageBag(['An error has occurred (key default)']));
		$view_error_bag->put('exception-message', new MessageBag(['An exception has occurred (key exception-message)']));

		$response = $this->withSession([
			'errors' => $view_error_bag
		])->get('/error-messages');

		$response->assertOk();

		$response->assertSeeInOrder([
			'An error has occurred (key default)',
			'An exception has occurred (key exception-message)',
			'Any errors:',
			'An error has occurred (key default)',
			'All errors:',
			'An error has occurred (key default)',
			'An exception has occurred (key exception-message)',
		]);
	}
}