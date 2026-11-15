<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::latest()->paginate(10);

        return view('admin.patients.index', compact('patients'));
    }



    // mostrar formulario de criação de paciente
    public function create()
    {
        return view('admin.patients.create');
    }

    // guardar pacientes
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|string|max:20',
            'phone' => 'nullable|string|max:30',
            'address' => 'nullable|string',
            'province' => 'nullable|string|max:100',
            'nationality' => 'nullable|string|max:100',
            'BI' => 'nullable|string|max:20|unique:patients,BI',
            'email' => 'nullable|string|email|max:255|unique:patients,email',
            'allergies' => 'nullable|string',
            'diseases' => 'nullable|string',
            'medications' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif'
        ]);

        Patient::create($validated);

        return redirect()->route('patients.index')->with('success', 'Paciente cadastrado com sucesso!');
    }

    

    public function edit(Patient $patient)
    {
        return view('admin.patients.edit', compact('patient'));
    }




    // atualiza paciente
    public function update(Request $request, Patient $patient)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|string|max:20',
            'phone' => 'nullable|string|max:30',
            'address' => 'nullable|string',
            'province' => 'nullable|string|max:100',
            'nationality' => 'nullable|string|max:100',
            'BI' => 'nullable|string|max:20|unique:patients,BI,' . $patient->id,
            'email' => 'nullable|string|email|max:255|unique:patients,email,' . $patient->id,
            'allergies' => 'nullable|string',
            'diseases' => 'nullable|string',
            'medications' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);


        $patient->update($validated);

        return redirect()->route('patients.index')->with('success', 'Paciente atualizado com sucesso!');
    }



    public function destroy(Patient $patient)
    {
        // apagar  paciente
        $patient->delete();

        return redirect()->route('patients.index')->with('success', 'Paciente eliminado com sucesso!');
    }
}
