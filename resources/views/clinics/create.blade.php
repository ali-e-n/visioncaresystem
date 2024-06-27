@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Clinic</h1>

        <form action="{{ route('clinics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="healthcare_center_id">Healthcare Center</label>
                <select name="healthcare_center_id" class="form-control" required>
                    <option value="">Select Healthcare Center</option>
                    @foreach ($healthcare_centers as $center)
                        <option value="{{ $center->id }}">{{ $center->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
