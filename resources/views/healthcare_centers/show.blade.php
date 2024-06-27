@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Healthcare Center Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $center->name }}</h5>
                <p class="card-text"><strong>Location:</strong> {{ $center->location }}</p>
                <div class="btn-group" role="group" aria-label="Actions">
                    <a href="{{ route('clinics.create', ['healthcare_center_id' => $center->id]) }}" class="btn btn-success">Add</a>
                    <a href="{{ route('healthcare-centers.edit', $center->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('healthcare-centers.destroy', $center->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
