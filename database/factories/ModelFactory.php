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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define('App\Post', function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph
    ];
});

$factory->define('App\Comment', function (Faker\Generator $faker) {
    return [
        'post_id'=>1,
        'name' => $faker->name,
        'comment' => $faker->paragraph,
        'email' => $faker->email
    ];
});

$factory->define('App\Tag', function (Faker\Generator $faker) {
    return [
        'name' => $faker->word
    ];
});