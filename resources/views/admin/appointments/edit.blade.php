
@extends('layouts.main')

@section('title', 'Editar Consulta')
@section('page-title', 'Editar Consulta')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-sm-12">

            <div class="card">

                {{-- Cabeçalho --}}
                <div class="card-header">
                    <h5 class="card-title mb-0">Editar Consulta</h5>
                </div>

                {{-- Formulário --}}
                <div class="card-body">

                    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row gx-3">

                            {{-- Nome do Paciente --}}
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">

                                    <label for="patient_id" class="form-label">
                                        Código do Paciente
                                    </label>

                                    <input
                                        type="number"
                                        name="patient_id"
                                        id="patient_id"
                                        class="form-control"
                                        value="{{ old('patient_id', $appointment->patient_id) }}"
                                    >

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
                                        value="{{ old('doctor', $appointment->doctor) }}"
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
                                        value="{{ old('nurse', $appointment->nurse) }}"
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
                                        placeholder="Descreva o problema de saúde do paciente">{{ old('message', $appointment->message) }}</textarea>

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
                                            {{ old('status', $appointment->status) == 'active' ? 'checked' : '' }}
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
                                            {{ old('status', $appointment->status) == 'inactive' ? 'checked' : '' }}
                                        >

                                        <label class="form-check-label" for="appointment_inactive">
                                            Inactiva
                                        </label>

                                    </div>

                                </div>
                            </div>

                            {{-- Botões --}}
                            <div class="col-sm-12">
                                <div class="d-flex gap-2 justify-content-end">

                                    <a href="{{ route('appointments.index') }}"
                                        class="btn btn-outline-secondary">
                                        <i class="ri-close-line me-1"></i>
                                        Cancelar
                                    </a>

                                    <button type="submit" class="btn btn-primary">
                                        <i class="ri-save-line me-1"></i>
                                        Actualizar Consulta
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
