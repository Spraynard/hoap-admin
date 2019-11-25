<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Participant;
use Faker\Generator as Faker;

$factory->define(Participant::class, function (Faker $faker) {
    return array_merge(
    	addressFactory( $faker ),
    	[
    		'service_interest' => $faker->word(),
    		'first_name' => $faker->firstName(),
    		'last_name' => $faker->lastName(),
    		'dob' => $faker->dateTimeThisCentury(),
    		'gender' => $faker->randomElement(['male', 'female', 'other']),
    		'ethnicity' => $faker->randomElement(['White','Hispanic','Black','Asian or Pacific Islander','Native American or Alaskan Native','Other']),
    		'email' => $faker->email(),
    		'phone' => $faker->phoneNumber(),
    		'ok_to_text' => $faker->boolean(),
    		'last_grade_completed' => $faker->randomElement(['1st','2nd','3rd','4th','5th','6th','7th','8th','9th','10th','11th','12th']),
    		'employment_status' => $faker->randomElement(['employed', 'unemployed']),
    		'number_of_children' => $faker->numberBetween(0, 12),
    		'annual_income' => $faker->randomFloat(2),
    		'additional_services' => null,
    		'referrer' => $faker->name(),
    		'status' => $faker->randomElement(['applicant', 'participant']),
    		'enrollment_date' => $faker->dateTimeThisYear(),
    		'exit_date' => null,
	    ]
	);
});
