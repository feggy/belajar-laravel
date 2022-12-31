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
                <th>Extracurriculars</th>
                <th>Teacher</th>
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
                    <td>
                        @foreach ($item->extracurriculars as $ekskul)
                            - {{ $ekskul->name }} <br>
                        @endforeach
                    </td>
                    <td>{{ $item->class->teacher->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
