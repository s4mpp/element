<?php

namespace S4mpp\Element\Tests\Unit\Form;

use S4mpp\Element\Tests\TestCase;

class InputTest extends TestCase
{
	function test_render_component()
	{
		$alert = $this->blade(
			'<x-element::form.input />'
		);

		$alert->assertSee('element--input-container');
		$alert->assertDontSee('element--input-label');
	}

	// various input types
	// required / not required
}