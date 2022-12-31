@extends('layouts.main')

@section('title', $student->name)

@section('content')
    <h2>Detail Siswa {{ $student->name }}</h2>

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

    <h4 class="mt-5">Extracurriculars</h4>
    @foreach ($student->extracurriculars as $item)
        - {{ $item->name }} <br>
    @endforeach

    <style>
        th {
            width: 25%
        }
    </style>
@endsection
