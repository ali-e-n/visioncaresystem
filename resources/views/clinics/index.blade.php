@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Clinics</h1>
        <a href="{{ route('clinics.create') }}" class="btn btn-primary">Add Clinic</a>
        <ul>
            @foreach ($clinics as $clinic)
                <li>
                    <a href="{{ route('clinics.show', $clinic->id) }}">{{ $clinic->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
