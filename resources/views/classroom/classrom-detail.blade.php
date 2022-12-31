@extends('layouts.main')

@section('title', $class->name)

@section('content')
    <h4>Halaman Kelas {{ $class->name }} | Wali Kelas: {{ $class->teacher->name }}</h4>

    <h5 class="mt-4">Daftar Siswa</h4>

    @foreach ($class->students as $item)
        {{ $loop->iteration }}. {{ $item->name }} @if ($item->gender == 'P')
            (Perempuan)
        @else
            (Laki-laki)
        @endif <br>
    @endforeach
@endsection
