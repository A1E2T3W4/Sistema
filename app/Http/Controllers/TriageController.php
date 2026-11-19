<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Triage;

class TriageController extends Controller
{
    // Listar triagens
       public function index()
    {
        $search = request('search');

        if ($search) {

            $triages = Triage::where('id', 'like', '%' . $search . '%')
                ->latest()
                ->paginate(10);
        } else {

            $triages = Triage::latest()->paginate(10);
        }

        return view('admin.triage.index', compact('triages', 'search'));
    }


    // Mostrar formulário de cadastro
    public function create()
    {
        return view('admin.triage.create');
    }

    // Guardar nova triagem
    public function store(Request $request)
    {
        $validated = $request->validate([
            'temperature' => 'nullable|numeric',
            'bloodPressure' => 'nullable|string|max:255',
            'heartRate' => 'nullable|integer|min:0',
            'respiratoryRate' => 'nullable|integer|min:0',
            'oxygenSaturation' => 'nullable|numeric|min:0|max:100',
            'weight' => 'nullable|numeric|min:0',
            'height' => 'nullable|numeric|min:0',
            'bloodGlucose' => 'nullable|numeric|min:0',
            'observations' => 'nullable|string',
            'riskClassification' => 'nullable|string|max:255',
            'triageDate' => 'required|date',
            'triagetime' => 'required',
        ]);

        Triage::create($validated);

        return redirect()
            ->route('triage.index')
            ->with('success', 'Triagem registada com sucesso!');
    }

    // Mostrar detalhes da triagem
    public function show($id)
    {
        $triage = Triage::findOrFail($id);

        return view('admin.triage.detalhe', compact('triage'));
    }

    // Eliminar triagem
    public function destroy($id)
    {
        $triage = Triage::findOrFail($id);

        $triage->delete();

        return redirect()
            ->route('triage.index')
            ->with('success', 'Triagem eliminada com sucesso!');
    }
}