@extends('layouts.main')

@section('title', $student->name)

@section('content')
    <h2>Detail Siswa {{ $student->name }}</h2>

    <div class="my-3 d-flex justify-content-center">
        @if ($student->image != '')
            <img src="{{ asset('storage/photo/' . $student->image) }}" alt="" height="200px">
        @else
            <img src="{{ asset('images/default.jpeg') }}" alt="" height="200px">
        @endif
    </div>

    <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Teacher</th>
        </tr>
        <tr>
            <td>{{ $student->nis }}</td>
            <td>
                @if ($student->gender == 'P')
                    Perempuan
                @else
                    Laki-laki
                @endif
            </td>
            <td>{{ $student->class->name }}</td>
            <td>{{ $student->class->teacher->name }}</td>
        </tr>
    </table>

    @if ($student->extracurriculars->isNotEmpty())
        <h4 class="mt-5">Extracurriculars</h4>
        <ol>
            @foreach ($student->extracurriculars as $item)
                <li>{{ $item->name }}</li>
            @endforeach
        </ol>
    @endif


    <style>
        th {
            width: 25%
        }
    </style>
@endsection
