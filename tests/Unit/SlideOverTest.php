<?php

namespace S4mpp\Element\Tests\Unit;

use S4mpp\Element\Tests\TestCase;

class SlideOverTest extends TestCase
{
	function test_render_slide()
	{
		$slide_over = $this->blade(
			'<x-element::slide-over idSlide="slideTest" />'
		);

		$slide_over->assertSee('slideTest');
		$slide_over->assertSee('--element-slide-over-backdrop ');
		$slide_over->assertSee('--element-slide-over-dialog');
		$slide_over->assertSee('--element-slide-over-button-close');
		$slide_over->assertSee('--element-slide-over-content');
		$slide_over->assertDontSee('--element-slide-over-title');
	}

	function test_render_slide_with_title()
	{
		$slide_over = $this->blade(
			'<x-element::slide-over idSlide="slideTest" title="Slide title" />'
		);

		$slide_over->assertSee('Slide title');
		$slide_over->assertSee('--element-slide-over-title');
	}
}