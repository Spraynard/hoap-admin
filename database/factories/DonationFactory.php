<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Donation;
use App\Models\Donor;
use Faker\Generator as Faker;

$factory->define(Donation::class, function (Faker $faker) {
    return [
        'donation_type' => $faker->randomElement(['one_time', 'recurring']),
        'in_kind' => $faker->boolean(),
        'amount' => $faker->numberBetween(1000, 2000),
        'donor_id' => function() {
            return factory(Donor::class)->create()->id;
        }
    ];
});
