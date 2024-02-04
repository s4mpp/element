<?php

namespace S4mpp\Element\Tests\Unit\Form;

use S4mpp\Element\Tests\TestCase;

class RadioTest extends TestCase
{
	function test_render_component()
	{
		$alert = $this->blade(
			'<x-element::form.radio />'
		);

		$alert->assertSee('element--input-container');
		$alert->assertDontSee('element--input-label');
	}
}