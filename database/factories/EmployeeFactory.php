<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'salary' => $faker->numberBetween(25000, 500000)
    ];
});
