<?php

Route::get('uses', 'UsesController')->name('uses.tech');
Route::get('{locale?}', 'PageController')->name('locale');

Route::post('contact', 'ContactController')->name('contact');
