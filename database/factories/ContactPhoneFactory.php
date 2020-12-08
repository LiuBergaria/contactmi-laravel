<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContactPhone;
use Faker\Generator as Faker;

$factory->define(ContactPhone::class, function (Faker $faker) {
    return [
        'phone' => $faker->phoneNumber(),
        'description' => $faker->randomElement([null, 'Casa', 'Trabalho', 'Pai', 'Mãe']),
    ];
});
