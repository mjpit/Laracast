@extends('layout')
@section('content')



<body>
    <h1>Projects</h1>
    <ul class="listgroup">
        @foreach ($projects as $project)



        <p class='col'>
            <ul class="list-group">
                <li class="list-group-item"><a href="/projects/{{$project->id}}" role="button">{{$project->title}}</a></li>
            </ul>
            {{-- <a class="btn btn-primary p-1" href="/projects/{{$project->id}}" role="button">{{$project->title}}</a> --}}


        </p>



        @endforeach
    </ul>
    <div class="container">
        <div class="col-md-1-12">
            <a name="" id="" class="btn btn-primary" href="/projects/create" role=" button ">Create New Project</a>
        </div>
    </div>
</body>
@endsection
