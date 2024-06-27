@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Doctor</h1>
        <form action="{{ route('doctors.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="specialization">Specialization</label>
                <input type="text" class="form-control" id="specialization" name="specialization" required>
            </div>
            <div class="form-group">
                <label for="primary_clinic_id">Primary Clinic ID</label>
                <input type="number" class="form-control" id="primary_clinic_id" name="primary_clinic_id" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
