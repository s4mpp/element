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
		$this->assertEquals('', (string)$alert);
	}

	function test_render_component_with_error()
	{
		session()->put('errors', (new ViewErrorBag)->put('default', (new MessageBag())->add('name', 'Example error')));
		
		$alert = $this->blade(
			'<x-element::message.error />'
		);

		$alert->assertSee('element--alert');
		$alert->assertSee('Example error');
	}
}