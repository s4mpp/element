<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;

class TableTest extends TestCase
{
	function test_render_component()
	{
		$modal = $this->blade(
			'<x-element::table />'
		);

		$modal->assertSee('--element-main-table');
		$modal->assertSee('--element-table-empty');
 		$modal->assertDontSeeText('--element-table');
 		$modal->assertDontSeeText('--element-thead');
 		$modal->assertDontSeeText('--element-tbody');
	}

	function test_basic_table()
	{

	}

	function test_table_no_lines()
	{

	}

	function test_table_with_content()
	{

	}
}