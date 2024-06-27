<!-- resources/views/clinics/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Clinic</h1>
        <form action="{{ route('clinics.update', $clinic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $clinic->name }}">
            </div>

            <div class="form-group">
                <label for="healthcare_center_id">Healthcare Center</label>
                <select class="form-control" id="healthcare_center_id" name="healthcare_center_id">
                    @foreach ($healthcare_centers as $center)
                        <option value="{{ $center->id }}" {{ $clinic->healthcare_center_id == $center->id ? 'selected' : '' }}>
                            {{ $center->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Add other fields as needed -->

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
