@extends('layouts.main')

@section('title', 'Students')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $item)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $item->name }}</td>
                    <td> {{ $item->gender }}</td>
                    <td> {{ $item->nis }}</td>
                    <td> {{ $item->class->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
