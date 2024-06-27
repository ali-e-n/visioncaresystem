<?php

namespace App\Http\Controllers;

use App\Models\HealthcareCenter;
use Illuminate\Http\Request;

class HealthcareCenterController extends Controller
{
    public function index()
    {
        $healthcare_centers = HealthcareCenter::all();
        return view('healthcare_centers.index', compact('healthcare_centers'));
    }

    public function create()
    {
        return view('healthcare_centers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
        ]);
    
        HealthcareCenter::create($request->all());
    
        return redirect()->route('healthcare-centers.index')
                         ->with('success', 'Healthcare center created successfully.');
    }

    public function show($id)
    {
        $center = HealthcareCenter::findOrFail($id); // Adjusted variable name here
        return view('healthcare_centers.show', compact('center')); // Adjusted variable name here
    }

    public function edit($id)
    {
        $healthcare_center = HealthcareCenter::findOrFail($id);
        return view('healthcare_centers.edit', compact('healthcare_center'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
        ]);

        $healthcare_center = HealthcareCenter::findOrFail($id);
        $healthcare_center->update($request->all());

        return redirect()->route('healthcare-centers.index')
                         ->with('success', 'Healthcare center updated successfully.');
    }

    public function destroy($id)
    {
        $healthcare_center = HealthcareCenter::findOrFail($id);
        $healthcare_center->delete();
    
        return redirect()->route('healthcare-centers.index')
                         ->with('success', 'Healthcare center deleted successfully.');
    }
}
