
@extends('layouts.main')

@section('title', 'Editar Consulta')
@section('page-title', 'Editar Consulta')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-sm-12">

            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">Editar Consulta</h5>
                </div>

                <div class="card-body">

                    <form action="#" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row gx-3">

                            {{-- Nome do Paciente --}}
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="patient_id" class="form-label">
                                        Nome do Paciente
                                    </label>

                                    <select name="patient_id" id="patient_id"
                                        class="form-select">
                                        <option value="">Seleccionar Paciente</option>
                                        <option value="1" selected>Jason Compton</option>
                                        <option value="2">Jennifer Robinson</option>
                                        <option value="3">Terry Baker</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="patient_email" class="form-label">
                                        Email do Paciente
                                    </label>

                                    <input type="email"
                                        name="patient_email"
                                        id="patient_email"
                                        class="form-control"
                                        value="test@test.com">
                                </div>
                            </div>

                            {{-- Sexo --}}
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="gender" class="form-label">
                                        Sexo
                                    </label>

                                    <select name="gender" id="gender"
                                        class="form-select">
                                        <option value="">Seleccionar Sexo</option>
                                        <option value="Masculino" selected>Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Idade --}}
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="age" class="form-label">
                                        Idade
                                    </label>

                                    <input type="number"
                                        name="age"
                                        id="age"
                                        class="form-control"
                                        value="68"
                                        min="0">
                                </div>
                            </div>

                            {{-- Telefone --}}
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="patient_phone" class="form-label">
                                        Telefone do Paciente
                                    </label>

                                    <input type="text"
                                        name="patient_phone"
                                        id="patient_phone"
                                        class="form-control"
                                        value="09876543421">
                                </div>
                            </div>

                            {{-- Data --}}
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="appointment_date" class="form-label">
                                        Data da Consulta
                                    </label>

                                    <input type="date"
                                        name="appointment_date"
                                        id="appointment_date"
                                        class="form-control"
                                        value="2026-11-17">
                                </div>
                            </div>

                            {{-- Hora --}}
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="appointment_time" class="form-label">
                                        Hora da Consulta
                                    </label>

                                    <input type="time"
                                        name="appointment_time"
                                        id="appointment_time"
                                        class="form-control"
                                        value="10:00">
                                </div>
                            </div>

                            {{-- Médico --}}
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="doctor_id" class="form-label">
                                        Médico Especialista
                                    </label>

                                    <select name="doctor_id" id="doctor_id"
                                        class="form-select">
                                        <option value="">Seleccionar Médico</option>
                                        <option value="1" selected>Henry Daniels</option>
                                        <option value="2">Cristina Groves</option>
                                        <option value="3">Marie Wells</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Departamento --}}
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="department_id" class="form-label">
                                        Departamento
                                    </label>

                                    <select name="department_id" id="department_id"
                                        class="form-select">
                                        <option value="">Seleccionar Departamento</option>
                                        <option value="1" selected>Cardiologia</option>
                                        <option value="2">Estomatologia</option>
                                        <option value="3">Neurologia</option>
                                        <option value="4">Oftalmologia</option>
                                        <option value="5">Ortopedia</option>
                                        <option value="6">Oncologia</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Motivo da consulta --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="message" class="form-label">
                                        Motivo da Consulta
                                    </label>

                                    <textarea name="message"
                                        id="message"
                                        class="form-control"
                                        rows="3"
                                        placeholder="Descreva o problema de saúde do paciente">Dores no peito e necessidade de avaliação médica.</textarea>
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
