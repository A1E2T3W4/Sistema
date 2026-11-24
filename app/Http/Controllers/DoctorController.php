<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::latest()->paginate(10);

        return view('admin.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doctors.create');
    }

    // Guardar médico
    public function store(Request $request)
    {
        Doctor::create($request->only([
            'name',
            'birthDate',
            'gender',
            'BI',
            'email',
            'phone',
            'address',
            'qualification',
            'specialty',
            'position',
            'biography',
        ]));

        return redirect()
            ->route('doctors.index')
            ->with('success', 'Médico cadastrado com sucesso!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // Mostrar formulário de edição
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);

        return view('admin.doctors.edit', compact('doctor'));
    }
// Actualizar médico
public function update(Request $request, $id)
{
    $doctor = Doctor::findOrFail($id);

    $doctor->update($request->only([
        'name',
        'birthDate',
        'gender',
        'BI',
        'email',
        'phone',
        'address',
        'qualification',
        'specialty',
        'position',
        'biography',
    ]));

    return redirect()
        ->route('doctors.index')
        ->with('success', 'Dados do médico actualizados com sucesso!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor = Doctor::findOrFail($id);

        $doctor->delete();

        return redirect()
            ->route('doctors.index')
            ->with('success', 'Médico eliminado com sucesso!');
    }
}
