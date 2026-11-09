
@extends('layouts.main')

@section('title', 'Adicionar Funcionário')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Adicionar Funcionário</h4>
        </div>
    </div>

    {{-- Formulário --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form action="#" method="POST">
                @csrf

                <div class="row">

                    {{-- Nome --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nome <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="first_name">
                        </div>
                    </div>

                    {{-- Apelido --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Apelido</label>
                            <input class="form-control" type="text" name="last_name">
                        </div>
                    </div>

                    {{-- Nome de utilizador --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nome de Utilizador <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="username">
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input class="form-control" type="email" name="email">
                        </div>
                    </div>

                    {{-- Palavra-passe --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Palavra-passe</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                    </div>

                    {{-- Confirmar palavra-passe --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Confirmar Palavra-passe</label>
                            <input class="form-control" type="password" name="password_confirmation">
                        </div>
                    </div>

                    {{-- Código do funcionário --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Código do Funcionário <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="employee_id">
                        </div>
                    </div>

                    {{-- Data de entrada --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Data de Entrada <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input
                                    class="form-control datetimepicker"
                                    type="text"
                                    name="joining_date"
                                    placeholder="DD/MM/AAAA"
                                >
                            </div>
                        </div>
                    </div>

                    {{-- Telefone --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input class="form-control" type="text" name="phone">
                        </div>
                    </div>

                    {{-- Função --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Função</label>

                            <select class="select form-control" name="role">
                                <option value="">Seleccionar Função</option>
                                <option value="admin">Administrador</option>
                                <option value="doctor">Médico</option>
                                <option value="nurse">Enfermeiro</option>
                                <option value="laboratory">Técnico de Laboratório</option>
                                <option value="pharmacist">Farmacêutico</option>
                                <option value="accountant">Director Financeiro</option>
                                <option value="receptionist">Recepcionista</option>
                                <option value="maternity">Profissional de Maternidade</option>
                                <option value="emergency">Técnico de Urgência</option>
                                <option value="ambulance">Técnico de Ambulância</option>
                                <option value="blood_bank">Técnico de Banco de Sangue</option>
                            </select>
                        </div>
                    </div>

                </div>

                {{-- Estado --}}
                <div class="form-group">
                    <label class="display-block">Estado</label>

                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="status"
                            id="employee_active"
                            value="active"
                            checked
                        >

                        <label class="form-check-label" for="employee_active">
                            Activo
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="status"
                            id="employee_inactive"
                            value="inactive"
                        >

                        <label class="form-check-label" for="employee_inactive">
                            Inactivo
                        </label>
                    </div>
                </div>

                {{-- Botões --}}
                <div class="m-t-20 text-center">

                    <a href="{{ route('employees.index') }}"
                       class="btn btn-secondary submit-btn">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-primary submit-btn">
                        Criar Funcionário
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection
