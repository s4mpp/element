<?php

namespace S4mpp\Element\Tests\Feature;

use S4mpp\Element\Tests\TestCase;

class PagesTest extends TestCase
{
	public static function pagesProvider()
	{
		return [
			['/'],
			['/badges'],
			['/buttons-and-links'],
			['/cards'],
			['/icons'],
			['/modals'],
			['/slide-overs'],
			['/inputs'],
			['/alerts'],
			['/tables'],
			['/flash-messages'],
			['/error-messages'],
		];
	}

	/**
	 *
	 * @dataProvider pagesProvider
	 */
	function test_home_page(string $page)
	{
		$response = $this->get($page);

		$response->assertOk();
	}
}