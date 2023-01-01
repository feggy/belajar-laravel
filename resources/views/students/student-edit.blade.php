@extends('layouts.main')

@section('title', 'Edit Student')

@section('content')
    <h1>Ubah data siswa</h1>

    <div class="mt-5 col-6">
        <form action="update/{{ $student->id }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name" value="{{ $student->name }}" required>
            </div>

            <div class="mt-3">
                <label for="name">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="{{ $student->gender }}">
                        @if ($student->gender == 'L')
                            Laki-laki
                        @else
                            Perempuan
                        @endif
                    </option>
                    @if ($student->gender == 'L')
                        <option value="P">Perempuan</option>
                    @else
                        <option value="L">Laki-laki</option>
                    @endif
                </select>
            </div>

            <div class="mt-3">
                <label for="nis">NIS</label>
                <input name="nis" type="text" class="form-control" id="nis" value="{{ $student->nis }}"
                    required>
            </div>

            <div class="mt-3">
                <label for="name">Kelas</label>
                <select name="class_id" id="class" class="form-control" required>
                    <option value="{{ $student->class->id }}">{{ $student->class->name }}</option>
                    @foreach ($class as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
