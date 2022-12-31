@extends('layouts.main')

@section('title', $student->name)

@section('content')
    <h2>Detail Siswa {{ $student->name }}</h2>

    <table class="table table-bordered mt-5">
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

    <style>
        th {
            width: 25%
        }
    </style>
@endsection
