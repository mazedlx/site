<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        Mail::send(new ContactMail($request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ])));

        return response('done', 200);
    }
}
