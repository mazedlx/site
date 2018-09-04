<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\App;

class ChangeLanguageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_change_the_language_to_english()
    {
        $response = $this->get('/en');

        $response->assertStatus(200);
        $this->assertEquals('en', App::getLocale());
    }

    /** @test */
    public function it_can_change_the_language_to_german()
    {
        $response = $this->get('/de');
        $response->assertStatus(200);
        $this->assertEquals('de', App::getLocale());
    }

    /** @test */
    public function the_default_language_is_german()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $this->assertEquals('de', App::getLocale());
    }
}
