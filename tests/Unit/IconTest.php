<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;

class IconTest extends TestCase
{
	function test_render_component()
	{
		$alert = $this->blade(
			'<x-element::icon name="arrow-up" />'
		);

		$alert->assertSee('svg');
		$alert->assertSee('path');
	}
}