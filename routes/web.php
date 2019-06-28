<?php

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/invoice-partial', function () {
    sleep(2);

    return view('invoice-partial', [
        'invoices' => App\Invoice::paginate(5),
    ]);
});

Route::view('/profile', 'profile');

Route::view('/account', 'account');
