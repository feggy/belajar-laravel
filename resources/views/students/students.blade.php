@extends('layouts.main')

@section('title', 'Students')

@section('content')
    <h1>Halaman Students</h1>

    <div class="my-5">
        <a href="/students/form-add" class="btn btn-primary">Add Data</a>
    </div>

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
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
