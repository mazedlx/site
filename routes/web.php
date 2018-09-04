<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/{locale?}', 'PageController');

Route::post('/contact', 'ContactController');
