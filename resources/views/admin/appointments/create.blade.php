
@extends('layouts.main')

@section('title', 'Adicionar Consulta')
@section('page-title', 'Adicionar Consulta')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-sm-12">

            <div class="card">

                {{-- Cabeçalho --}}
                <div class="card-header">
                    <h5 class="card-title mb-0">Adicionar Consulta</h5>
                </div>

                {{-- Formulário --}}
                <div class="card-body">

                    <form action="{{ route('appointments.store') }}" method="POST">
                        @csrf

                        <div class="row gx-3">

                            {{-- Nome do Paciente --}}
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3 position-relative">

                                    <label for="patient_search" class="form-label">
                                        Nome do Paciente
                                    </label>

                                    <input
                                        type="text"
                                        id="patient_search"
                                        class="form-control"
                                        placeholder="Pesquisar paciente pelo nome..."
                                        autocomplete="off"
                                    >

                                    <input
                                        type="hidden"
                                        name="patient_id"
                                        id="patient_id"
                                        value="{{ old('patient_id') }}"
                                    >

                                    <div
                                        id="patient_results"
                                        class="list-group position-absolute w-100 shadow"
                                        style="z-index: 1000; display: none;">
                                    </div>

                                </div>
                            </div>

                            {{-- Médico --}}
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">

                                    <label for="doctor" class="form-label">
                                        Médico
                                    </label>

                                    <input
                                        type="text"
                                        name="doctor"
                                        id="doctor"
                                        class="form-control"
                                        value="{{ old('doctor') }}"
                                    >

                                </div>
                            </div>

                            {{-- Enfermeiro Responsável --}}
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">

                                    <label for="nurse" class="form-label">
                                        Enfermeiro Responsável
                                    </label>

                                    <input
                                        type="text"
                                        name="nurse"
                                        id="nurse"
                                        class="form-control"
                                        value="{{ old('nurse') }}"
                                    >

                                </div>
                            </div>

                            {{-- Observação da Consulta --}}
                            <div class="col-sm-12">
                                <div class="mb-3">

                                    <label for="message" class="form-label">
                                        Observação da Consulta
                                    </label>

                                    <textarea
                                        name="message"
                                        id="message"
                                        class="form-control"
                                        rows="3"
                                        placeholder="Descreva o problema de saúde do paciente">{{ old('message') }}</textarea>

                                </div>
                            </div>

                            {{-- Estado da Consulta --}}
                            <div class="col-sm-12">
                                <div class="mb-3">

                                    <label class="form-label d-block">
                                        Estado da Consulta
                                    </label>

                                    <div class="form-check form-check-inline">

                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="status"
                                            id="appointment_active"
                                            value="active"
                                            {{ old('status', 'active') == 'active' ? 'checked' : '' }}
                                        >

                                        <label class="form-check-label" for="appointment_active">
                                            Activa
                                        </label>

                                    </div>

                                    <div class="form-check form-check-inline">

                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="status"
                                            id="appointment_inactive"
                                            value="inactive"
                                            {{ old('status') == 'inactive' ? 'checked' : '' }}
                                        >

                                        <label class="form-check-label" for="appointment_inactive">
                                            Inactiva
                                        </label>

                                    </div>

                                </div>
                            </div>

                            {{-- Botões --}}
                            <div class="col-sm-12">
                                <div class="d-flex justify-content-end gap-2">

                                    <a href="{{ route('appointments.index') }}" class="btn btn-light">
                                        Cancelar
                                    </a>

                                    <button type="submit" class="btn btn-primary">
                                        <i class="ri-save-line me-1"></i>
                                        Criar Consulta
                                    </button>

                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
