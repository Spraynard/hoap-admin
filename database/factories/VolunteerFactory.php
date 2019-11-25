<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Volunteer;
use Faker\Generator as Faker;

$factory->define(Volunteer::class, function (Faker $faker) {
    return array_merge(
        AddressFactory( $faker ),
        [
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'dob' => $faker->date('Y-m-d'),
            'gender' => $faker->randomElement(['male', 'female', 'other', 'unknown']),
            'email' => $faker->email(),
            'phone' => $faker->phoneNumber(),
            'background_check' => $faker->boolean(),
            'ethnicity' => $faker->randomElement(['White', 'Hispanic', 'Black', 'Asian or Pacific Islander', 'Native American or Alaskan Native', 'Other']),
            'ok_to_text' => $faker->boolean(),
        ]
    );
});
