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
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'username' => $faker->unique()->word,
        'email' => $faker->unique()->safeEmail,
        'sex' => $faker->randomElement(['pria', 'wanita']),
        'birthday' => $faker->date,
        'nik' => $faker->randomNumber(),
        'address' => $faker->address,
        'city' => $faker->city,
        'pos_code' => $faker->numberBetween(1000, 9999),
        'phone' => $faker->phoneNumber,
        'no_rek' => $faker->bankAccountNumber,
        'name_rek' => $faker->name,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
