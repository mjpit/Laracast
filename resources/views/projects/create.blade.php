@extends('layout')
@section('content')


<body>
    <h1>Create New Project</h1>
    <form method="POST" action="/projects">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" name="title" class="form-control {{ $errors->has('title')  ? 'is-invalid'  : '' }}" value="{{ old('title') }}"
                required placeholder="Project Title"> {{-- <small id="helpId" class="form-text text-muted">Please sumbit title</small>            --}}

        </div>
        <div class="form-group">
            <textarea name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="" required placeholder="Project Description">{{ old('description') }}</textarea>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Create Project</button>
        </div>
    @include('errors')
    </form>
</body>
@endsection
