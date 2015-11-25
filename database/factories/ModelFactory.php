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

$factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Entities\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'responsible' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'obs' => $faker->sentence,
    ];
});

$factory->define(App\Entities\Project::class, function (Faker\Generator $faker) {
    return [
        'user_id' => \App\Entities\User::all()->lists('id')->random(1),
        'client_id' => \App\Entities\Client::all()->lists('id')->random(1),
        'name' => $faker->word,
        'description' => $faker->sentence,
        'progress' => $faker->NumberBetween(0,100),
        'status' => $faker->numberBetween(1,3),
        'due_date' => $faker->date,
    ];
});
