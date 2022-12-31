@extends('layouts.main')

@section('title', $ekskul->name)

@section('content')
    <h4>Halaman Ekskul {{ $ekskul->name }}</h4>

    <h5 class="mt-4">Daftar Siswa</h5>

    @foreach ($ekskul->students as $item)
        {{ $loop->iteration }}. {{ $item->name }} @if ($item->gender == 'P')
            (Perempuan)
        @else
            (Laki-laki)
        @endif <br>
    @endforeach

@endsection
