<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('projects')->insert([
        //     'title' => str_random(10),
        //     'description' => str_random(40),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        factory(App\Project::class, 5)->create();
        factory(App\Task::class, 10)->create();

        // factory(App\Project::class, 5)->create()->each(function ($project) {
        //     $project->tasks()->save(factory(App\Task::class)->make());
        // });

    }
}
