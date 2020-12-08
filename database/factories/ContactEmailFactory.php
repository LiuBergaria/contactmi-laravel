<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContactEmail;
use Faker\Generator as Faker;

$factory->define(ContactEmail::class, function (Faker $faker) {
    return [
        'email' => $faker->email(),
        'description' => $faker->randomElement([null, 'Casa', 'Trabalho', 'Pai', 'Mãe']),
    ];
});
