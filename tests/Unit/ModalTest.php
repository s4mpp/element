<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;

class ModalTest extends TestCase
{
	function test_render_modal()
	{
		$modal = $this->blade(
			'<x-element::modal idModal="modalTest" />'
		);

		$modal->assertSee('modalTest');
		$modal->assertSee('--element-modal-backdrop');
		$modal->assertSee('--element-modal-dialog');
		$modal->assertSee('--element-modal-button-close');
 		$modal->assertDontSee('--element-modal-danger-icon');
		$modal->assertDontSee('--element-modal-subtitle');
		$modal->assertDontSee('--element-modal-title');
	}

	function test_render_modal_with_title()
	{
		$modal = $this->blade(
			'<x-element::modal idModal="modalTest" title="Title modal" />'
		);

		$modal->assertSee('Title modal');
		$modal->assertSee('--element-modal-title');
	}

	function test_render_modal_with_subtitle()
	{
		$modal = $this->blade(
			'<x-element::modal idModal="modalTest" subtitle="Subtitle modal" />'
		);

		$modal->assertSee('Subtitle modal');
		$modal->assertSee('--element-modal-subtitle');
	}

	function test_render_modal_danger()
	{
		$modal = $this->blade(
			'<x-element::modal idModal="modalTest" danger />'
		);

		$modal->assertSee('--element-modal-danger-icon');
	}
}