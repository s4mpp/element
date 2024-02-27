<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;

class ModalTest extends TestCase
{
	function test_render_component()
	{
		$modal = $this->blade(
			'<x-element::modal idModal="modalTest" />'
		);

		$modal->assertSee('modalTest');
		$modal->assertSee('element--modal-backdrop');
		$modal->assertSee('element--modal-dialog');
		$modal->assertSee('element--modal-button-close');
 		$modal->assertDontSee('element--modal-danger-icon');
		$modal->assertDontSee('element--modal-subtitle');
		$modal->assertDontSee('element--modal-title');
	}

	// without title
	// with title
	// with title and subtitle
	// with subtitle without title
}