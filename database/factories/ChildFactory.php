<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Child;
use App\Models\Participant;
use Faker\Generator as Faker;

$factory->define(Child::class, function (Faker $faker) {
    return array_merge(
    	addressFactory( $faker ),
    	[
	    	'participant_id' => function() {
	    		return factory(Participant::class)->create()->id;
	    	},
	    	'first_name' => $faker->firstName(),
	    	'last_name' => $faker->lastName(),
	    	'dob' => $faker->dateTimeThisDecade(),// date of birth
	    	'gender' => $faker->randomElement(['male', 'female', 'other', 'unknown']),
	    	'email' => $faker->email(),
	    	'phone' => $faker->phoneNumber(),
	    	'care_info' => $faker->sentence(),
	    	'notes' => $faker->text(),
	    	'dad_involved' => $faker->boolean(),
	    	'cps_involvement' => $faker->boolean(),
	    ]
	);
});
