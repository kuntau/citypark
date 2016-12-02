<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'company_name' => $faker->company,
        'company_address' => $faker->address,
        'phone_office' => $faker->phoneNumber,
        'phone_cell' => $faker->tollFreePhoneNumber,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->sentence,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 500),
    ];
});
