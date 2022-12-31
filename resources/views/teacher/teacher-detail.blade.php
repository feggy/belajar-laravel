@extends('layouts.main')

@section('title', $teacher->name)

@section('content')
    <h4>Halaman Guru {{ $teacher->name }}</h4>

    <h5 class="mt-4">Wali Kelas:
        @if ($teacher->class != null)
            {{ $teacher->class->name }}
        @else
            -
        @endif
    </h5>


    @if ($teacher->class != null)
        <h4 class="mt-4">Daftar Siswa</h4>
        <ol>
            @foreach ($teacher->class->students as $item)
                <li>
                    {{ $item->name }} @if ($item->gender == 'P')
                        (Perempuan)
                    @else
                        (Laki-laki)
                    @endif
                </li>
            @endforeach
        </ol>
    @endif


@endsection
