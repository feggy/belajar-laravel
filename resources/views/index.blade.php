@extends('layouts.main')

@section('title', 'Halaman Utama')

@section('content')
    <h1>Selamat Datang</h1>
    <h2>{{ Auth::user()->email }}({{ Auth::user()->role->name }})</h2>
@endsection
