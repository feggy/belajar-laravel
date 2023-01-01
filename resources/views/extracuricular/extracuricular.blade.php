@extends('layouts.main')

@section('title', 'Extracurricular')

@section('content')
    <h1>Halaman Extracurricular</h1>

    <div class="my-5">
        <a href="" class="btn btn-primary">Add Data</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ekskulList as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td> <a href="/extracuricular/{{ $item->id }}">detail</a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
