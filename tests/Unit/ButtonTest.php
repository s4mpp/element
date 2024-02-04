<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;

class ButtonTest extends TestCase
{
	function test_render_component()
	{
		$button = $this->blade(
			'<x-element::button />'
		);

		$button->assertSee('element--button');
		$button->assertSee('element--button-content');
		$button->assertDontSee('element--button-loading');
	}
}