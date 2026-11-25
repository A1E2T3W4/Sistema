<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nurse;
use App\Models\Specialty;

class NurseController extends Controller
{
    // LISTAR ENFERMEIROS
    public function index()
    {
        $nurses = Nurse::with('specialty')->latest()->paginate(10);

        return view('admin.nurses.index', compact('nurses'));
    }

    // FORMULÁRIO DE CADASTRO
    public function create()
    {
        $specialties = Specialty::all();

        return view('admin.nurses.create', compact('specialties'));
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
            'specialty_id',
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
        $nurse = Nurse::with('specialty')->findOrFail($id);

        return view('admin.nurses.show', compact('nurse'));
    }

    // FORMULÁRIO DE EDIÇÃO
    public function edit($id)
    {
        $nurse = Nurse::findOrFail($id);
        $specialties = Specialty::all();

        return view('admin.nurses.edit', compact('nurse', 'specialties'));
    }

    // ATUALIZAR ENFERMEIRO
    public function update(Request $request, $id)
    {
        $nurse = Nurse::findOrFail($id);

         Nurse::create($request->only([
            'name',
            'dateOfBirth',
            'gender',
            'BI',
            'email',
            'phone',
            'address',
            'photo',
            'specialty_id',
            'professionalRegistration',
            'position',
        ]));

 

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
