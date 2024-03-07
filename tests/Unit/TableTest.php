<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;

class TableTest extends TestCase
{
	function test_render_component()
	{
		$table = $this->blade(
			'<x-element::table />'
		);

		$table->assertSee('--element-main-table');
		$table->assertSee('--element-table-empty');
 		$table->assertDontSeeText('--element-table');
 		$table->assertDontSeeText('--element-thead');
 		$table->assertDontSeeText('--element-tbody');
	}

	function test_basic_table()
	{
		$table = $this->blade(
			'<x-element::table>
				<x-slot:header>
					<x-element::table.th>Title A</x-element::table.th>
					<x-element::table.th>Title B</x-element::table.th>
				</x-slot:header>
		
				<x-slot:body>
					<tr>
						<x-element::table.td>Content A</x-element::table.td>
						<x-element::table.td>Content B</x-element::table.td>
					</tr>
				</x-slot:body>
			</x-element::table>'
		);

		$table->assertSee('--element-main-table');
		$table->assertDontSee('--element-table-empty');
 		$table->assertSee('--element-table');
 		$table->assertSee('--element-table-thead');
 		$table->assertSee('--element-table-tbody');
	}

	function test_table_no_body()
	{
		$table = $this->blade(
			'<x-element::table>
				<x-slot:header>
					<x-element::table.th>Title A</x-element::table.th>
					<x-element::table.th>Title B</x-element::table.th>
				</x-slot:header>
			</x-element::table>'
		);

		$table->assertSee('--element-main-table');
		$table->assertSee('--element-table-empty');
 		$table->assertSee('--element-table');
 		$table->assertDontSee('--element-table-thead');
 		$table->assertDontSee('--element-table-tbody');
	}
}