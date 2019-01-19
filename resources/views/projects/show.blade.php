@extends('layout')
@section('content')
<h1 class="title">Project</h1>
<div class="card">
    <img class="card-img-top" src="" alt="">
    <div class="card-body">
        <h4 class="card-title">{{$project->title }}</h4>
        <p class="card-text">{{$project->description }}</p>
    </div>

    <div class="container">
        <div class="col-sm mb-4 ">
            <a href="/projects/{{$project->id}}/edit" class="btn btn-primary">Edit</a>
        </div>

    </div>

    <div class="card-body">
        <h4 class='card-title'>Tasks</h4>
        <ul class="list-group-flush">
            @foreach ($project->tasks as $task)
            <li class="list-group-item">
                <form action="/tasks/{{ $task->id }}" method="post">
                    @method('PATCH') @csrf
                    <div class="custom-control">
                        <label for="completed" class="checkbox">
                        <span class="input-group-addon">
                        <input class="form-check-input " type="checkbox" aria-label="..." name="completed" onchange="this.form.submit()" {{$task->completed ? "checked" : ""}}>
                        </span> <p>
                        @if ($task->completed)

                        <s> {{$task->description}}</s>
                        @else
                        {{$task->description}}
                        @endif
                            </p>

                   </label> </div>
                </form>
            </li>

            @endforeach </ul>

        <form action="/projects/{{$project->id}}/tasks" method="POST">
            @csrf
            <div class="form-group">
                <label for=""><h4>New Task</h4></label>
                <input type="text" class="form-control" name="description" id="" placeholder="New Task">

            </div>
    @include('errors')
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>


    </div>

</div>
@endsection
