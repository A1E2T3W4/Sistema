<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Triage;

class TriageController extends Controller
{
    // Listar triagens
    public function index()
    {
        $triages = Triage::latest()->paginate(10);

        return view('admin.triage.index', compact('triages'));
    }

    // Mostrar formulário de cadastro
    public function create()
    {
        return view('admin.triage.create');
    }

    // Guardar nova triagem
    public function store(Request $request)
    {
      $dados = $request->only([
        'temperature',
        'bloodPressure',
        'weight',
        'height',
    ]);

    $dados['triageDate'] = now()->toDateString();
    $dados['triagetime'] = now()->format('H:i:s');

    Triage::create($dados);


        return redirect()->route('triage.index')->with('success', 'Triagem registada com sucesso!');
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
