<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;

class BadgeTest extends TestCase
{
	function test_render_component()
	{
		$badge = $this->blade(
			'<x-element::badge />'
		);

		$badge->assertSee('element--badge');
		$badge->assertSee('element--badge-content');
		$badge->assertDontSee('element--badge-loading');
	}
}