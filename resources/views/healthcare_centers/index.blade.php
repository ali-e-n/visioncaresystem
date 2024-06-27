@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Healthcare Centers</h1>
        <a href="{{ route('healthcare-centers.create') }}" class="btn btn-primary">Add Healthcare Center</a>
        <ul class="list-group mt-3">
            @foreach($healthcare_centers as $center)
                <li class="list-group-item">
                    <a href="{{ route('healthcare-centers.show', $center->id) }}">{{ $center->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
