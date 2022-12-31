@extends('layouts.main')

@section('title', 'Students')

@section('content')
    <div>
        @foreach ($students as $item)
            - {{ $item->name }}
        @endforeach
    </div>

@endsection
