<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(string $locale = 'de')
    {
        App::setLocale($locale);

        return view('page.index', [
            'portfolios' => Portfolio::all(),
            'changeLocaleTo' => App::isLocale('de') ? 'en' : 'de',
        ]);
    }
}
