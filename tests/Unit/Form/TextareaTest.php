<?php

namespace S4mpp\Element\Tests\Unit\Form;

use S4mpp\Element\Tests\TestCase;

class TextareaTest extends TestCase
{
	function test_render_component()
	{
		$alert = $this->blade(
			'<x-element::form.textarea />'
		);

		$alert->assertSee('--element-input-container');
		$alert->assertDontSee('--element--nput-label');
	}

	// required / not required
}