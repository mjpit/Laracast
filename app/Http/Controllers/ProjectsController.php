<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Support\Facades\View;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = \App\Project::all();
        // return $projects;
        return view('projects.index', ['projects' => $projects]);
    }

    public function create()
    {
        return view('projects.create');
    }

    // public function store()
    // {
    //     $project = new \App\Project();
    //     $project->title = request('title');
    //     $project->description = request('description');
    //     $project->save();
    //     return redirect('projects');
    // }

    public function store()
    {
        // Project::create([
        //     'title' => request('title'),
        //     'description' => request('description')
        // ]);

        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        ]
        );
        Project::create($attributes);
        return redirect('projects');
    }
    public function show(Project $project)
    {
        //$project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
        //return $project;
    }

    public function edit($id)
    
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        ]));

        // $project = Project::find($id);
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();
        return redirect('/projects');

    }
    public function destroy($id)
    {
        $project = Project::destroy($id);
        return redirect('/projects');

    }

}
