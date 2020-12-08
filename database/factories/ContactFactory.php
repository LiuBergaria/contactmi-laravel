<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'id_user' => DB::getPdo()->lastInsertId(),
        'name' => $faker->name(),
        'fg_favorite' => $faker->boolean(10),
        'cep' => str_replace('-', '', $faker->postcode()),
        'full_address' => $faker->streetAddress(),
        'address_number' => $faker->numberBetween(1, 10000),
    ];
});
