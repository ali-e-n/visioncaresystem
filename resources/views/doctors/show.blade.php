@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Doctor Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $doctor->name }}</h5>
                <p class="card-text"><strong>Specialization:</strong> {{ $doctor->specialization }}</p>
                <p class="card-text"><strong>Primary Clinic:</strong> {{ $doctor->clinic->name }}</p>
                
                <div class="btn-group" role="group" aria-label="Actions">
                    <!-- Edit Doctor Button -->
                    <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary">Edit</a>

                    <!-- Remove Doctor Form -->
                    <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
