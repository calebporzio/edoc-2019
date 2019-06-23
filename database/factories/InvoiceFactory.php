<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Invoice;
use Faker\Generator as Faker;

$factory->define(Invoice::class, function (Faker $faker) {
    return [
        'title' => 'Something',
        'amount' => $faker->numberBetween(100, 1000),
    ];
});
