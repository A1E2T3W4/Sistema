<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialty;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     // LISTAR ESPECIALIDADES
    public function index()
    {
        $specialties = Specialty::latest()->paginate(10);

        return view('admin.specialties.index', compact('specialties'));
    }


    

     // FORMULÁRIO DE CADASTRO
    public function create()
    {
        return view('admin.specialties.create');
    }

      // GUARDAR ESPECIALIDADE
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        Specialty::create($validated);

        return redirect()
            ->route('specialties.index')
            ->with('success', 'Especialidade criada com sucesso!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
