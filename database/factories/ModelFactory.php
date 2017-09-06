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
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('qwerty'),
        'remember_token' => str_random(10),
        'date_of_birth' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'reference' => str_random(7) . time() . uniqid(),
        'registration_status' => rand(1,2),
        'role_id' => rand(1,2),
        'trade_interest_id' => rand(1,5),
        'community_id' => rand(1,7),
        'user_token' => str_random(64),
        'created_at' => $faker->dateTimeThisMonth($max = 'now'),
        'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
    ];
});
