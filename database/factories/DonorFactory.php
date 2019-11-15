<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Donor;
use Faker\Generator as Faker;

$factory->define(Donor::class, function (Faker $faker) {
    return array_merge(
        AddressFactory($faker),
        [
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'email' => $faker->email(),
            'phone_number' => $faker->phoneNumber(),
        ]
    );
});
