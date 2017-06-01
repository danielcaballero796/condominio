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
$factory->define(Condominio\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

//creando viviendas

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Condominio\Vivienda::class, function (Faker\Generator $faker) {


    return [
        'name' => $faker->unique()->randomDigit,
        'habitada' => $faker->boolean,
        'numero' => $faker->numberBetween($min = 100, $max = 310),
        'bloque' => str_random(1),
    ];
});

//'name', '', '',''