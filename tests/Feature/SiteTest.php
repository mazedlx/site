<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SiteTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function the_site_works()
    {
        $this->get('/')->assertStatus(200);
    }
}
