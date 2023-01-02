@extends('layouts.main')

@section('title', 'Students')

@section('content')
    <h1>Halaman Deleted Students</h1>

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
                        <a href="/students/student/{{ $item->id }}/restore">Restore</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
