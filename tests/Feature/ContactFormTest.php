<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactFormTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        Mail::fake();
    }
    private function validParams($overrides = [])
    {
        return array_merge([
            'name' => 'Bob Doe',
            'email' => 'bob@example.com',
            'message' => 'Yo, what up dog!',
        ], $overrides);
    }
    /** @test */
    public function an_email_gets_sent_when_the_contact_form_is_submitted()
    {
        $response = $this->post('/contact', $this->validParams());

        $response->assertStatus(200);
        Mail::assertSent(ContactMail::class, 1);
    }

    /** @test */
    public function name_is_required()
    {
        $response = $this->post('/contact', $this->validParams([
            'name' => null,
        ]));

        $response->assertStatus(302);
        Mail::assertSent(ContactMail::class, 0);
    }
}
