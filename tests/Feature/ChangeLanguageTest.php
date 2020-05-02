<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class ChangeLanguageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_change_the_language_to_english()
    {
        $response = $this->get('/en');

        $response->assertOk();
        $this->assertEquals('en', App::getLocale());
    }

    /** @test */
    public function it_can_change_the_language_to_german()
    {
        $response = $this->get('/de');
        $response->assertOk();
        $this->assertEquals('de', App::getLocale());
    }

    /** @test */
    public function the_default_language_is_german()
    {
        $response = $this->get('/');

        $response->assertOk();
        $this->assertEquals('de', App::getLocale());
    }
}
