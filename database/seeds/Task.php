<?php

use Illuminate\Database\Seeder;

class Task extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Task::class, 5)->create();
    }
}
