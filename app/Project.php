<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description',

    ];

    public function tasks()
    {
        return $this->hasMany('App\Task');

    }

    public function addTask($task)
    {
        return $this->tasks()->create($task);
    }

}
