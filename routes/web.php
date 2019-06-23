<?php

Route::get('/invoice', function () {
    $invoices = App\Invoice::all();

    return view('invoice')->with('invoices', $invoices);
});

Route::view('/profile', 'profile');
Route::view('/account', 'account');
