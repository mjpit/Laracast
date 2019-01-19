<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'description', 'completed', 'project_id',

    ];
    /**
     * project function
     * A Task belongs to a Project
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    /**
     * complete function
     *
     * @param [boolean] $completed
     * @return void
     */
    public function complete($completed)
    {

        $this->update([
            'completed' => $completed,
        ]);

    }

}
