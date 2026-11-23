<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Listar consultas
    public function index()
    {
        $appointments = Appointment::latest()->paginate(10);

        return view('admin.appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // Mostrar formulário de criação
    public function create()
    {
        return view('admin.appointments.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    // Guardar consulta
    public function store(Request $request)
    {
        Appointment::create($request->only([
            'nurse',
            'message',
            'status',
        ]));

        return redirect()
            ->route('appointments.index')
            ->with('success', 'Consulta criada com sucesso!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

  public function edit(string $id)
{
    $appointment = Appointment::findOrFail($id);

    return view('admin.appointments.edit', compact('appointment'));
}

    // Actualizar consulta
    public function update(Request $request, string $id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->update($request->only([
            'nurse',
            'message',
            'status',
        ]));

        return redirect()
            ->route('appointments.index')
            ->with('success', 'Consulta actualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    // Eliminar consulta
    public function destroy(string $id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->delete();

        return redirect()
            ->route('appointments.index')
            ->with('success', 'Consulta eliminada com sucesso!');
    }
}
