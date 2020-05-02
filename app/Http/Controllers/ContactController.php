<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Rules\SpamProtection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        App::setLocale($request->locale);

        Mail::send(new ContactMail($request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'spam_protection' => new SpamProtection,
        ])));

        return response('done', Response::HTTP_OK);
    }
}
