<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;

class ClickableTest extends TestCase
{
	public static function clickableProvider()
	{
		return [
			'Button' => ['button'],
			'Link' => ['link']
		];
	}
	
	/**
	 * @dataProvider clickableProvider
	 */
	function test_render_component(string $element)
	{
		$button = $this->blade(
			'<x-element::'.$element.' />'
		);

		$button->assertSee('element--button');
		$button->assertSee('element--button-content');
		$button->assertDontSee('element--button-loading');
	}

	// full
}