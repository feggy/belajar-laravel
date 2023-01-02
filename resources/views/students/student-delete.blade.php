@extends('layouts.main')

@section('title', 'Add Student')

@section('content')
    <div>
        <h3>Apakah kamu yakin delete: {{ $student->name }}</h3>

        <form action="/students/student-destroy/{{ $student->id }}" style="display: inline-block;" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
        <a href="/students" class="btn btn-primary">Cancel</a>
    </div>
@endsection
