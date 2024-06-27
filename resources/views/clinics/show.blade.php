@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Clinic Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $clinic->name }}</h5>
                <p class="card-text"><strong>Healthcare Center:</strong> {{ $clinic->healthcareCenter->name }}</p>

                <div class="btn-group" role="group" aria-label="Actions">
                    <!-- Edit Clinic Button -->
                    <a href="{{ route('clinics.edit', $clinic->id) }}" class="btn btn-primary">Edit</a>

                    <!-- Remove Clinic Form -->
                    <form action="{{ route('clinics.destroy', $clinic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <!-- Add Clinic Button -->
            <a href="{{ route('clinics.create', ['healthcare_center_id' => $clinic->healthcareCenter->id]) }}" class="btn btn-success">Add Clinic</a>
        </div>
    </div>
@endsection
