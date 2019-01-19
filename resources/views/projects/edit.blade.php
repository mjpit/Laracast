@extends('layout')
@section('content')

<h1>Edit Project</h1>


<form method="POST" action="/projects/{{$project->id}}">
    @method('PATCH')@csrf
    <div class="field">
        <div class="control">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" required id="" aria-describedby="helpId"
                    placeholder="Title" value="{{$project->title}}">
                <small id="helpId" class="form-text text-muted">Fill in the tile of your project</small>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" required name="description" id="" rows="3">{{$project->description}}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>



</form>
<form id="delete-form" method="POST" action="/projects/{{$project->id}}">
    @csrf @method('DELETE')
    <div class="form-group">

        <input type="submit" class="btn btn-danger" value="Delete Project">

    </div>
</form>

@foreach ($errors->all() as $error )
</div>

<div class="alert alert-warning" role="alert">

    <strong>{{ $error }}</strong>

</div>

@endforeach
@endsection
