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
		$alert->assertSee('0 0 24 24');
		$alert->assertSee('path');
	}

	function test_render_component_mini()
	{
		$alert = $this->blade(
			'<x-element::icon name="arrow-down" mini />'
		);

		$alert->assertSee('svg');
		$alert->assertSee('0 0 20 20');
		$alert->assertSee('path');
	}

	function test_render_component_outline()
	{
		$alert = $this->blade(
			'<x-element::icon name="arrow-left" outline />'
		);

		$alert->assertSee('svg');
		$alert->assertSee('0 0 24 24');
		$alert->assertSee('path');
		$alert->assertSee('stroke-linecap');
	}
}