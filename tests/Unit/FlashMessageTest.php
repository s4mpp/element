<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;

class FlashMessageTest extends TestCase
{
	function test_render_component()
	{
		
		$alert = $this->blade(
			'<x-element::message.flash />'
		);

		$alert->assertDontSee('element--alert');
		$this->assertEquals('', $alert);
	}


}