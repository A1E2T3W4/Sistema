@extends('layouts.main')

@section('title', 'Adicionar Consulta')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Adicionar Consulta</h4>
        </div>
    </div>

    {{-- Formulário --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form>

                {{-- Identificação e paciente --}}
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ID da Consulta</label>
                            <input
                                class="form-control"
                                type="text"
                                value="APT-0001"
                                readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome do Paciente</label>

                            <select class="select form-control" name="patient_id">
                                <option value="">Selecionar Paciente</option>
                                <option value="1">Jennifer Robinson</option>
                                <option value="2">Terry Baker</option>
                            </select>
                        </div>
                    </div>

                </div>

                {{-- Departamento e médico --}}
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Departamento</label>

                            <select class="select form-control" name="department_id">
                                <option value="">Selecionar Departamento</option>
                                <option value="1">Estomatologia</option>
                                <option value="2">Neurologia</option>
                                <option value="3">Oftalmologia</option>
                                <option value="4">Ortopedia</option>
                                <option value="5">Oncologia</option>
                                <option value="6">Otorrinolaringologia</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Médico</label>

                            <select class="select form-control" name="doctor_id">
                                <option value="">Selecionar Médico</option>
                                <option value="1">Cristina Groves</option>
                                <option value="2">Marie Wells</option>
                                <option value="3">Henry Daniels</option>
                            </select>
                        </div>
                    </div>

                </div>

                {{-- Data e horário --}}
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data da Consulta</label>

                            <div class="cal-icon">
                                <input
                                    type="text"
                                    class="form-control datetimepicker"
                                    name="appointment_date"
                                    placeholder="Seleccionar data">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Horário</label>

                            <div class="time-icon">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="datetimepicker3"
                                    name="appointment_time"
                                    placeholder="Seleccionar horário">
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Contactos --}}
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email do Paciente</label>

                            <input
                                class="form-control"
                                type="email"
                                name="patient_email">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Telefone do Paciente</label>

                            <input
                                class="form-control"
                                type="text"
                                name="patient_phone">
                        </div>
                    </div>

                </div>

                {{-- Mensagem --}}
                <div class="form-group">
                    <label>Observações</label>

                    <textarea
                        cols="30"
                        rows="4"
                        class="form-control"
                        name="message"></textarea>
                </div>

                {{-- Estado --}}
                <div class="form-group">

                    <label class="display-block">Estado da Consulta</label>

                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="status"
                            id="appointment_active"
                            value="active"
                            checked>

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
                            value="inactive">

                        <label class="form-check-label" for="appointment_inactive">
                            Inactiva
                        </label>
                    </div>

                </div>

                {{-- Botão --}}
                <div class="m-t-20 text-center">

                    <button type="submit" class="btn btn-primary submit-btn">
                        Criar Consulta
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection