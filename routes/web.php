<?php

Route::get('uses', 'UsesController');
Route::get('{locale?}', 'PageController');

Route::post('contact', 'ContactController');
