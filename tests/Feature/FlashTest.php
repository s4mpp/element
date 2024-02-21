<?php

namespace S4mpp\Element\Tests\Feature;

use S4mpp\Element\Tests\TestCase;

class FlashTest extends TestCase
{
	function test_dispatch_flash_messages()
	{
		$this->get('/flash-messages');
		$response = $this->get('/flash-messages/dispatch');

		$response->assertStatus(302);
		$response->assertRedirect('/flash-messages');

		$response->assertSessionHas('message');
		$response->assertSessionHas('info');
		$response->assertSessionHas('warning-message');
		$response->assertSessionHas('error-message');
		$response->assertSessionHas('info-message');
	}
}