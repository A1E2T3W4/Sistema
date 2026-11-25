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
        $search = request('search');

        if ($search) {

            $patients = Patient::where('name', 'like', '%' . $search . '%')
                ->latest()
                ->paginate(10);
        } else {

            $patients = Patient::latest()->paginate(10);
        }

        return view('admin.patients.index', compact('patients', 'search'));
    }


    // Mostrar formulário de cadastro
    public function create()
    {
        return view('admin.patients.create');
    }

    // Guardar paciente
    public function store(Request $request)
    {
        Patient::create($request->only([
            'name',
            'birthDate',
            'gender',
            'phone',
            'address',
            'BI',
        ]));

        return redirect()->route('patients.index')->with('success', 'Paciente cadastrado com sucesso!');
    }

    // Mostrar formulário de edição
    public function edit(Patient $patient)
    {
        return view('admin.patients.edit', compact('patient'));
    }

    // Atualizar paciente
    public function update(Request $request, Patient $patient)
    {
        $patient->update($request->only([
            'name',
            'birthDate',
            'gender',
            'phone',
            'address',
            'BI' . $patient->id,
  
        ]));    


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

    public function show($id)
    {
        $patient = Patient::findOrFail($id);

        return view('admin.patients.detalhe', compact('patient'));
    }
}
