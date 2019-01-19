<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->realText(35),
        'description' => $faker->realText(100),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
