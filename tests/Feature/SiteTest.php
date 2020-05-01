<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class SiteTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function the_site_works()
    {
        $this->get('/')->assertOk();
    }
}
