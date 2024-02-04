<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;

class CardTest extends TestCase
{
	function test_render_component()
	{
		$card = $this->blade(
			'<x-element::card />'/*  */
		);

		$card->assertSee('element--card');
		$card->assertSee('element--card-content');
		$card->assertDontSee('element--card-title');
	}
}