<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PatientController extends Controller
{
    // Listar pacientes
    public function index()
    {
        $patients = Patient::latest()->paginate(10);

        return view('admin.patients.index', compact('patients'));
    }

    // Mostrar formulário de cadastro
    public function create()
    {
        return view('admin.patients.create');
    }

    // Guardar paciente
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthDate' => 'nullable|date',
            'gender' => 'nullable|string|max:20',
            'phone' => 'nullable|string|max:30',
            'address' => 'nullable|string',
            'BI' => 'nullable|string|max:20|unique:patients,BI',
            'bloodType' => 'nullable|string|max:5',
            
            
        ]);

        Patient::create($validated);

        return redirect()
            ->route('patients.index')
            ->with('success', 'Paciente cadastrado com sucesso!');
    }

    // Mostrar formulário de edição
    public function edit(Patient $patient)
    {
        return view('admin.patients.edit', compact('patient'));
    }

    // Atualizar paciente
    public function update(Request $request, Patient $patient)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthDate' => 'nullable|date',
            'gender' => 'nullable|string|max:20',
            'phone' => 'nullable|string|max:30',
            'address' => 'nullable|string',
            'BI' => 'nullable|string|max:20|unique:patients,BI,' . $patient->id,
            'bloodType' => 'nullable|string|max:5',
           
            
        ]);

        $patient->update($validated);

        return redirect()
            ->route('patients.index')
            ->with('success', 'Paciente atualizado com sucesso!');
    }

    // Eliminar paciente
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()
            ->route('patients.index')
            ->with('success', 'Paciente eliminado com sucesso!');
    }




}