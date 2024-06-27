@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Doctors</h1>
        <a href="{{ route('doctors.create') }}" class="btn btn-primary">Add Doctor</a>
        <ul class="list-group mt-3">
            @foreach($doctors as $doctor)
                <li class="list-group-item">
                    <a href="{{ route('doctors.show', $doctor->id) }}">{{ $doctor->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
