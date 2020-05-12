<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        App::setLocale($request->locale);

        if (request()->spam_protection !== '') {
            return response('done', Response::HTTP_OK);
        }

        Mail::send(new ContactMail($request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:30',
        ])));

        return response('done', Response::HTTP_OK);
    }
}
