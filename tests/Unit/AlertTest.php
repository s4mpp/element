<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;

class AlertTest extends TestCase
{
	function test_render_component()
	{
		$alert = $this->blade(
			'<x-element::alert />'
		);

		$alert->assertSee('--element-alert');
		$alert->assertSee('--element-alert');
		$alert->assertSee('--element-alert-content');
		$alert->assertDontSee('--element-alert-title');
	}

	// basic
	// with title
	// with html
	// with long text
}