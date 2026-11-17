
@extends('layouts.main')

@section('title', 'Editar Funcionário')

@section('page-title', 'Editar Funcionário')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-12">

            <form action="#" method="POST">
                @csrf
                @method('PUT')

                {{-- Dados Pessoais --}}
                <div class="card mb-3">

                    <div class="card-header">
                        <h5 class="card-title mb-1">
                            <i class="ri-user-line me-2"></i>
                            Dados Pessoais
                        </h5>

                        <p class="text-muted mb-0">
                            Informações pessoais do funcionário.
                        </p>
                    </div>

                    <div class="card-body">
                        <div class="row gx-3">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Nome <span class="text-danger">*</span>
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="first_name"
                                       value="António"
                                       placeholder="Nome do funcionário">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Apelido</label>

                                <input type="text"
                                       class="form-control"
                                       name="last_name"
                                       value="Wanandumbo"
                                       placeholder="Apelido do funcionário">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Email <span class="text-danger">*</span>
                                </label>

                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="funcionario@email.com"
                                       placeholder="exemplo@email.com">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Telefone</label>

                                <input type="text"
                                       class="form-control"
                                       name="phone"
                                       value="+244 900 000 000"
                                       placeholder="+244 900 000 000">
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Dados Profissionais --}}
                <div class="card mb-3">

                    <div class="card-header">
                        <h5 class="card-title mb-1">
                            <i class="ri-briefcase-3-line me-2"></i>
                            Dados Profissionais
                        </h5>

                        <p class="text-muted mb-0">
                            Informações relacionadas com a actividade profissional.
                        </p>
                    </div>

                    <div class="card-body">
                        <div class="row gx-3">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    N.º de Funcionário
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="employee_id"
                                       value="FUNC001"
                                       placeholder="Ex.: FUNC001">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Data de Admissão
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="date"
                                       class="form-control"
                                       name="joining_date"
                                       value="2026-11-08">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Função</label>

                                <select class="form-select" name="role">

                                    <option value="admin">Administrador</option>
                                    <option value="doctor" selected>Médico</option>
                                    <option value="nurse">Enfermeiro</option>
                                    <option value="receptionist">Recepcionista</option>
                                    <option value="laboratory">Técnico de laboratório</option>
                                    <option value="pharmacist">Farmacêutico</option>
                                    <option value="accountant">Director financeiro</option>
                                    <option value="maternity">Profissional de maternidade</option>
                                    <option value="emergency">Técnico de urgência</option>
                                    <option value="ambulance">Técnico de ambulância</option>
                                    <option value="blood_bank">Técnico de banco de sangue</option>

                                </select>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Estado do Funcionário --}}
                <div class="card mb-3">

                    <div class="card-header">
                        <h5 class="card-title mb-1">
                            <i class="ri-toggle-line me-2"></i>
                            Estado do Funcionário
                        </h5>

                        <p class="text-muted mb-0">
                            Defina a situação actual do funcionário no sistema.
                        </p>
                    </div>

                    <div class="card-body">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input"
                                   type="radio"
                                   name="status"
                                   id="employee_active"
                                   value="active"
                                   checked>

                            <label class="form-check-label"
                                   for="employee_active">
                                Activo
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input"
                                   type="radio"
                                   name="status"
                                   id="employee_inactive"
                                   value="inactive">

                            <label class="form-check-label"
                                   for="employee_inactive">
                                Inactivo
                            </label>
                        </div>

                    </div>
                </div>

                {{-- Botões --}}
                <div class="d-flex justify-content-end gap-2 mb-3">

                    <a href="{{ route('employees.index') }}"
                       class="btn btn-outline-secondary">
                        <i class="ri-close-line me-1"></i>
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="ri-save-line me-1"></i>
                        Guardar Alterações
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection
