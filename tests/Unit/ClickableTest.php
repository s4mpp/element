<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;

class ClickableTest extends TestCase
{
	public static function clickableProvider()
	{
		return [
			'Button' => ['button'],
			'Link' => ['link']
		];
	}

	public static function contextProvider()
	{
		return [
			'default' => ['default', '--element-button-default'],
			'secondary' => ['secondary', '--element-button-secondary'],
			'success' => ['success', '--element-button-success'],
			'danger' => ['danger', '--element-button-danger'],
			'warning' => ['warning', '--element-button-warning'],
			'info' => ['info', '--element-button-info'],
		];
	}

	public static function sizeProvider()
	{
		return [
			'mini' => ['mini', 'px-2 py-1 text-xs', 'w-2 h-2'],
			'null' => [null, 'px-3 py-2 text-sm', 'w-3 h-3'],
			'large' => ['large', 'px-4 py-3 text-sm', 'w-3.5 h-3.5'],
		];
	}
	
	/**
	 * @dataProvider clickableProvider
	 */
	function test_render_clickable(string $element)
	{
		$button = $this->blade(
			'<x-element::'.$element.' />'
		);

		$button->assertSee('--element-button');
		$button->assertSee('--element-button-content');
		$button->assertDontSee('--element-button-loading');
		$button->assertDontSee('--element-button w-full');
	}

	/**
	 * @dataProvider clickableProvider
	 */
	function test_render_clickable_full(string $element)
	{
		$button = $this->blade(
			'<x-element::'.$element.' full />'
		);

		$button->assertSee('--element-button w-full');
	}

	/**
	 * @dataProvider contextProvider
	 */
	function test_render_clickable_context(string $context, string $class)
	{
		$button = $this->blade(
			'<x-element::button context="'.$context.'" />'
		);

		$button->assertSee($class);
	}

	/**
	 * @dataProvider sizeProvider
	 */
	function test_render_clickable_size(string $size = null, string $class, string $class_loading)
	{
		$button = $this->blade(
			'<x-element::button size="'.$size.'" loading />'
		);

		$button->assertSee($class);
		$button->assertSee($class_loading);
	}
}