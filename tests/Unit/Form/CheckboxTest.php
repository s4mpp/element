<?php

namespace S4mpp\Element\Tests\Unit\Form;

use S4mpp\Element\Tests\TestCase;

class CheckboxTest extends TestCase
{
	function test_render_component()
	{
		$alert = $this->blade(
			'<x-element::form.checkbox />'
		);

		$alert->assertSee('--element-input-container');
		$alert->assertDontSee('--element-input-label');
	}

	// with elements
	// required / not required
}