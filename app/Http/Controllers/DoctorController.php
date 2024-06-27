<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller

{

    
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'primary_clinic_id' => 'required|exists:clinics,id',
        ]);

        // Create new doctor
        Doctor::create($request->all());

        return redirect()->route('doctors.index')
                         ->with('success', 'Doctor created successfully');
    }

    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.show', compact('doctor'));
    }

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'primary_clinic_id' => 'required|exists:clinics,id',
        ]);

        // Update doctor
        $doctor = Doctor::findOrFail($id);
        $doctor->update($request->all());

        return redirect()->route('doctors.index')
                         ->with('success', 'Doctor updated successfully');
    }

    public function destroy($id)
    {
        // Delete doctor
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return redirect()->route('doctors.index')
                         ->with('success', 'Doctor deleted successfully');
    }
}
