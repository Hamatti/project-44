<?php
namespace Tests\Unit;
use Tests\TestCase;

class AboutPageUnitTest extends TestCase
{
  public function test_about_page_is_visible()
  {
      $this->get(route('about'))
        ->assertStatus(200)
        ->assertSee('Project 44');
  }
}
