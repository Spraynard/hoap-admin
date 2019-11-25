<?

use Faker\Generator as Faker;

function AddressFactory(Faker $faker)
{
	return [
		'county' => $faker->cityPrefix(),
		'line_1' => $faker->streetAddress(),
		'line_2' => $faker->secondaryAddress(),
		'city' => $faker->city(),
		'state' => $faker->state(),
		'zip' => $faker->postcode()
	];
}