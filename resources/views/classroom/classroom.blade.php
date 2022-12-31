@extends('layouts.main')

@section('title', 'Class')

@section('content')
    <h1>Halaman Class</h1>

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Students</th>
                <th>Teacher</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classList as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        @foreach ($item->students as $student)
                            - {{ $student->name }} <br>
                        @endforeach
                    </td>
                    <td>
                        {{ $item->teacher->name }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
