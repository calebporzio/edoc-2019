<?php

Route::get('/invoice', function () {
    return view('invoice', [
        'invoices' => App\Invoice::paginate(5),
    ]);
});

Route::view('/profile', 'profile');

Route::view('/account', 'account');
