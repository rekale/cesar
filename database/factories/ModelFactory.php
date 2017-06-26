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

    $faker = Faker\Factory::create('id_ID');

    return [
        'name' => $faker->unique()->name,
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

$factory->define(App\Models\Banner::class, function (Faker\Generator $faker) {

    $faker = Faker\Factory::create('id_ID');
    return [
        'link' => $faker->imageUrl(640, 480, 'nature'),
    ];
});

$factory->define(App\Models\Destination::class, function (Faker\Generator $faker) {
    $title = $faker->words(3, true);

    $faker = Faker\Factory::create('id_ID');
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'category_id' => '1',
        'thumbnail_image' => $faker->imageUrl(640, 480, 'nature'),
        'abstract' => $faker->sentence(),
        'description' => $faker->paragraph(),
        'location' => $faker->city,
        'lat' => $faker->latitude(-5.226754, 5.427413),
        'lng' => $faker->longitude(95.401736, 140.782745),
        'tickets' => $faker->numberBetween(1000, 9999),
    ];
});
