<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TimeEntry;
use App\Models\Volunteer;
use Faker\Generator as Faker;

$factory->define(TimeEntry::class, function (Faker $faker) {
    return [
        'volunteer_id' => function() {
            return factory(Volunteer::class)->create()->id;
        },
        'date' => $faker->date('Y-m-d'),
        'duration_hours' => $faker->randomFloat(2, 0.20, 20.00),
        'description' => $faker->sentence(),
    ];
});
