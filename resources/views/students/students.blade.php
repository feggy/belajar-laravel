@extends('layouts.main')

@section('title', 'Students')

@section('content')
    <h1>Halaman Students</h1>

    <div class="my-5 d-flex justify-content-between">
        <a href="/students/form-add" class="btn btn-primary">Add Data</a>
        <a href="/students/student-deleted" class="btn btn-info">Show Deleted Data</a>
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $item)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $item->name }}</td>
                    <td> {{ $item->gender }}</td>
                    <td> {{ $item->nis }}</td>
                    <td>
                        <a href="/students/details/{{ $item->id }}">detail</a>
                        <a href="/students/form-edit/{{ $item->id }}">edit</a>
                        <a href="/students/student-delete/{{ $item->id }}">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
