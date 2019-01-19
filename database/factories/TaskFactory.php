<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'description' => $faker->realText(25),
        'completed' => $faker->boolean,
        'project_id' => App\Project::inRandomOrder()->first()->id,

    ];
});
