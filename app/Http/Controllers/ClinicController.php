<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\HealthcareCenter;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function index()
    {
        $clinics = Clinic::all();
        return view('clinics.index', compact('clinics'));
    }

    public function create()
    {
        $healthcare_centers = HealthcareCenter::all();
        return view('clinics.create', compact('healthcare_centers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'healthcare_center_id' => 'required|exists:healthcare_centers,id',
        ]);

        Clinic::create($request->all());

        return redirect()->route('clinics.index')
                         ->with('success', 'Clinic created successfully.');
    }

    public function show($id)
    {
        $clinic = Clinic::findOrFail($id);
        return view('clinics.show', compact('clinic'));
    }

    public function edit($id)
    {
        $clinic = Clinic::findOrFail($id);
        $healthcare_centers = HealthcareCenter::all();
        return view('clinics.edit', compact('clinic', 'healthcare_centers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'healthcare_center_id' => 'required|exists:healthcare_centers,id',
        ]);

        $clinic = Clinic::findOrFail($id);
        $clinic->update($request->all());

        return redirect()->route('clinics.index')
                         ->with('success', 'Clinic updated successfully.');
    }

    public function destroy($id)
    {
        $clinic = Clinic::findOrFail($id);
        $clinic->delete();

        return redirect()->route('clinics.index')
                         ->with('success', 'Clinic deleted successfully.');
    }
}
