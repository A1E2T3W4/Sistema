@extends('layouts.main')

@section('title', 'Nova Triagem')
@section('page-title', 'Nova Triagem')

@section('content')

<div class="app-body">
    <div class="row gx-3">
        <div class="col-sm-12">

            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">Triagem</h5>
                </div>

                <div class="card-body p-4">

                    {{-- Erros de validação --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Verifica os seguintes campos:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('triage.store') }}" method="POST">
                        @csrf

                        {{-- Identificação do Paciente --}}
                        <div class="mb-4">

                            <div class="row gx-3">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Nome do Paciente</label>
                                        <input type="text"
                                            name="patient_name"
                                            class="form-control"
                                         
                                            placeholder="Pesquise por nome">
                                    </div>
                                </div>
                            </div>
                        </div>



                        {{-- Sinais Vitais --}}
                        <div class="mb-4">



                            <div class="row gx-3">

                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="temperature" class="form-label">
                                            Temperatura (°C)
                                        </label>

                                        <input type="number" step="0.1"
                                            name="temperature"
                                            id="temperature"
                                            class="form-control"
                                            placeholder="Ex.: 36.5"
                                            value="{{ old('temperature') }}">
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="bloodPressure" class="form-label">
                                            Pressão Arterial (mmHg)
                                        </label>

                                        <input type="text"
                                            name="bloodPressure"
                                            id="bloodPressure"
                                            class="form-control"
                                            placeholder="Ex.: 120/80"
                                            value="{{ old('bloodPressure') }}">
                                    </div>
                                </div>

                            

                            

                                 <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label for="height" class="form-label">
                                                    Altura (cm)
                                                </label>

                                                <input type="number" step="0.1"
                                                    name="height"
                                                    id="height"
                                                    class="form-control"
                                                    placeholder="Ex.: 170"
                                                    value="{{ old('height') }}">
                                            </div>

                                        </div>

                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">
                                            Peso (kg)
                                        </label>

                                        <input type="number" step="0.1"
                                            name="weight"
                                            id="weight"
                                            class="form-control"
                                            placeholder="Ex.: 70"
                                            value="{{ old('weight') }}">
                                    </div>

                                    
                                </div>
                              
                               {{-- Responsável pela Triagem --}}
                                 <div class="col-xxl-4 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="professional_name" class="form-label">
                                                Enfermeiro / Técnico Responsável
                                            </label>

                                            <input type="text"
                                                name="professional_name"
                                                id="professional_name"
                                                class="form-control"
                                                placeholder="Nome do profissional"
                                                value="">
                                        </div>
                                    </div>
                            </div>


                            {{-- Botões --}}
                            <div class="d-flex gap-2 justify-content-end">

                                <button type="submit" class="btn btn-primary">
                                    <i class="ri-save-line me-1"></i>
                                    Registar Triagem
                                </button>

                            </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection