<?php

namespace Tests\Feature;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function setUp(): void
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
            'spam_protection' => '',
        ], $overrides);
    }

    /** @test */
    public function an_email_gets_sent_when_the_contact_form_is_submitted()
    {
        $response = $this->post(route('contact'), $this->validParams());

        $response->assertOk();
        Mail::assertSent(ContactMail::class, 1);
    }

    /** @test */
    public function name_is_required()
    {
        $response = $this->post(route('contact'), $this->validParams([
            'name' => '',
        ]));

        $response->assertSessionHasErrors(['name']);
        Mail::assertSent(ContactMail::class, 0);
    }

    /** @test */
    public function email_is_required()
    {
        $response = $this->post(route('contact'), $this->validParams([
        'email' => '',
    ]));

        $response->assertSessionHasErrors(['email']);
        Mail::assertSent(ContactMail::class, 0);
    }

    /** @test */
    public function email_must_be_an_email()
    {
        $response = $this->post(route('contact'), $this->validParams([
            'email' => 'not-an-email',
        ]));

        $response->assertSessionHasErrors(['email']);
        Mail::assertSent(ContactMail::class, 0);
    }

    /** @test */
    public function message_is_required()
    {
        $response = $this->post(route('contact'), $this->validParams([
            'message' => '',
        ]));

        $response->assertSessionHasErrors(['message']);
        Mail::assertSent(ContactMail::class, 0);
    }

    /** @test */
    public function spam_protection_must_be_empty()
    {
        $response = $this->post(route('contact'), $this->validParams([
            'spam_protection' => 'not-empty',
        ]));

        Mail::assertSent(ContactMail::class, 0);
    }
}
