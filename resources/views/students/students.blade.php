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

    <div class="mb-3 col-12 col-sm-8 col-md-5">
        <form action="" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Apa cari tu?" aria-label="Username"
                    aria-describedby="basic-addon1", name="keyword">
                <button class="input-group-text btn btn-primary">Search</button>
            </div>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Class</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $index => $item)
                <tr>
                    <td>{{ ($students->currentPage() - 1) * $students->perPage() + $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->class->name }}</td>
                    <td>
                        <a href="/students/details/{{ $item->id }}">detail</a>
                        <a href="/students/form-edit/{{ $item->id }}">edit</a>
                        <a href="/students/student-delete/{{ $item->id }}">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-5">
        {{ $students->withQueryString()->links() }}
    </div>


@endsection
