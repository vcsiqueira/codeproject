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

$fact = new \Faker\Factory();

$factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Entities\Project::class, function (Faker\Generator $faker) {
    return [
        'owner_id' => rand(1,50),
        'client_id' => rand(1,10),
        'name' => $faker->name,
        'description' => $faker->ipv4,
        'progress' => 100,
        'status' => 1,
        'due_date' => $faker->date('d/m/Y')
    ];
});
$factory->define(App\Entities\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'responsible' => $faker->name,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'address' => $faker->address,
        'obs' => $faker->sentence,
    ];
});

$factory->define(App\Entities\ProjectNote::class, function (Faker\Generator $faker) {
    return [
        'project_id' => rand(1,20),
        'title' => $faker->word,
        'note' => $faker->paragraph,
    ];
});
