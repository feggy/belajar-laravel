@extends('layouts.main')

@section('title', 'Class')

@section('content')
    <h1>Halaman Class</h1>

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classList as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td> <a href="">detail</a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
