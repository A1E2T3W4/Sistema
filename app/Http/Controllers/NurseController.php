<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nurse;

class NurseController extends Controller
{
    // LISTAR ENFERMEIROS
    public function index()
    {
        $nurses = Nurse::latest()->paginate(10);

        return view('admin.nurses.index', compact('nurses'));
    }

    // FORMULÁRIO DE CADASTRO
    public function create()
    {
        return view('admin.nurses.create');
    }

    // GUARDAR ENFERMEIRO
    public function store(Request $request)
    {
        Nurse::create($request->only([
            'name',
            'dateOfBirth',
            'gender',
            'BI',
            'email',
            'phone',
            'address',
            'photo',
            'specialty',
            'professionalRegistration',
            'position',
        ]));

        return redirect()
            ->route('nurses.index')
            ->with('success', 'Enfermeiro registado com sucesso!');
    }

    // MOSTRAR PERFIL DO ENFERMEIRO
    public function show(string $id)
    {
        $nurse = Nurse::findOrFail($id);

        return view('admin.nurses.show', compact('nurse'));
    }

    // FORMULÁRIO DE EDIÇÃO
    public function edit($id)
    {
        $nurse = Nurse::findOrFail($id);

        return view('admin.nurses.edit', compact('nurse'));
    }

    // ATUALIZAR ENFERMEIRO
    public function update(Request $request, $id)
    {
        $nurse = Nurse::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'dateOfBirth' => 'nullable|date',
            'gender' => 'nullable|string|max:255',
            'BI' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'specialty' => 'nullable|string|max:255',
            'professionalRegistration' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
        ]);

        $nurse->update($validated);

        return redirect()
            ->route('nurses.index')
            ->with('success', 'Dados do enfermeiro actualizados com sucesso!');
    }

    // ELIMINAR ENFERMEIRO
    public function destroy(string $id)
    {
        $nurse = Nurse::findOrFail($id);

        $nurse->delete();

        return redirect()
            ->route('nurses.index')
            ->with('success', 'Enfermeiro eliminado com sucesso!');
    }
}
