<?php

namespace App\Http\Controllers;

use App\Models\Nurse;
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
        Specialty::create($request->only([
            'name',
            'description',
        ]));


        return redirect()
            ->route('specialties.index');
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
    $specialty = Specialty::findOrFail($id);

    return view('admin.specialties.edit', compact('specialty'));
}

    /**
     * Update the specified resource in storage.
     */
   // ACTUALIZAR ESPECIALIDADE
public function update(Request $request, string $id)
{
    $specialty = Specialty::findOrFail($id);

    $specialty::create($request->only([
            'name',
            'description',
        ]));

    return redirect()
        ->route('specialties.index')
        ->with('success', 'Especialidade actualizada com sucesso!');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
{
    $specialty = Specialty::findOrFail($id);

    $specialty->delete();

    return redirect()
        ->route('specialties.index')
        ->with('success', 'Especialidade eliminada com sucesso!');
}
    }


