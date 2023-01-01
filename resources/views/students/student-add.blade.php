@extends('layouts.main')

@section('title', 'Add Student')

@section('content')
    <h1>Tambah siswa baru</h1>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            <strong>Success!!!</strong> {{ Session::get('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    <div class="mt-5 col-6">
        <form action="add-new" method="POST">
            @csrf
            <div>
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name">
            </div>

            <div class="mt-3">
                <label for="name">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="">Pilih salah satu</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <div class="mt-3">
                <label for="nis">NIS</label>
                <input name="nis" type="text" class="form-control" id="nis">
            </div>

            <div class="mt-3">
                <label for="name">Kelas</label>
                <select name="class_id" id="class" class="form-control">
                    <option value="">Pilih salah satu</option>
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
