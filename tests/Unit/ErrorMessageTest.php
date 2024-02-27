<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;
use Illuminate\Support\MessageBag;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\Facades\Session;

class ErrorMessageTest extends TestCase
{
	function test_render_component()
	{		
		$alert = $this->blade(
			'<x-element::message.error />'
		);

		$alert->assertDontSee('element--alert');
		$this->assertEquals('', $alert);
	}

	function test_render_component_with_error_default()
	{
		session()->put('errors', (new ViewErrorBag)->put('default', (new MessageBag())->add('name', 'Example error')));
		
		$alert = $this->blade(
			'<x-element::message.error />'
		);

		$alert->assertSee('element--alert');
		$alert->assertSee('Example error');
	}

	function test_render_component_with_all_errors()
	{
		session()->put('errors', (new ViewErrorBag)->put('default', (new MessageBag())->add('name', 'Example error 1')->add('name', 'Example error 2')));
		
		$alert = $this->blade(
			'<x-element::message.error all />'
		);

		$alert->assertSee('element--alert');
		$alert->assertSee('Example error 1');
		$alert->assertSee('Example error 2');
	}
}