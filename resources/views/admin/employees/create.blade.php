
@extends('layouts.main')

@section('title', 'Adicionar Funcionário')

@section('page-title', 'Adicionar Funcionário')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-12">

            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-user-add-line me-2"></i>
                        Adicionar Funcionário
                    </h5>
                </div>

                <div class="card-body">

                    <form action="#" method="POST">
                        @csrf

                        {{-- MÓDULO 1: DADOS PESSOAIS --}}
                        <div class="mb-4">

                            <div class="d-flex align-items-center mb-3">
                                <div class="me-2 text-primary">
                                    <i class="ri-user-line fs-4"></i>
                                </div>

                                <div>
                                    <h6 class="mb-0">Dados Pessoais</h6>
                                    <small class="text-muted">
                                        Informações de identificação do funcionário.
                                    </small>
                                </div>
                            </div>

                            <div class="row gx-3">

                                {{-- Nome --}}
                                <div class="col-md-6 mb-3">
                                    <label for="first_name" class="form-label">
                                        Nome <span class="text-danger">*</span>
                                    </label>

                                    <input type="text"
                                           name="first_name"
                                           id="first_name"
                                           class="form-control"
                                           placeholder="Digite o nome">
                                </div>

                                {{-- Apelido --}}
                                <div class="col-md-6 mb-3">
                                    <label for="last_name" class="form-label">
                                        Apelido
                                    </label>

                                    <input type="text"
                                           name="last_name"
                                           id="last_name"
                                           class="form-control"
                                           placeholder="Digite o apelido">
                                </div>

                                {{-- Email --}}
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">
                                        Email <span class="text-danger">*</span>
                                    </label>

                                    <input type="email"
                                           name="email"
                                           id="email"
                                           class="form-control"
                                           placeholder="exemplo@email.com">
                                </div>

                                {{-- Telefone --}}
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">
                                        Telefone
                                    </label>

                                    <input type="tel"
                                           name="phone"
                                           id="phone"
                                           class="form-control"
                                           placeholder="Ex.: 923 000 000">
                                </div>

                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- MÓDULO 2: DADOS DE ACESSO --}}
                        <div class="mb-4">

                            <div class="d-flex align-items-center mb-3">
                                <div class="me-2 text-primary">
                                    <i class="ri-shield-user-line fs-4"></i>
                                </div>

                                <div>
                                    <h6 class="mb-0">Dados de Acesso ao Sistema</h6>
                                    <small class="text-muted">
                                        Credenciais utilizadas para entrar no SGH.
                                    </small>
                                </div>
                            </div>

                            <div class="row gx-3">

                                {{-- Nome de utilizador --}}
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">
                                        Nome de Utilizador <span class="text-danger">*</span>
                                    </label>

                                    <input type="text"
                                           name="username"
                                           id="username"
                                           class="form-control"
                                           placeholder="Digite o nome de utilizador">
                                </div>

                                {{-- Palavra-passe --}}
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">
                                        Palavra-passe <span class="text-danger">*</span>
                                    </label>

                                    <input type="password"
                                           name="password"
                                           id="password"
                                           class="form-control"
                                           placeholder="Digite a palavra-passe">
                                </div>

                                {{-- Confirmar palavra-passe --}}
                                <div class="col-md-6 mb-3">
                                    <label for="password_confirmation" class="form-label">
                                        Confirmar Palavra-passe <span class="text-danger">*</span>
                                    </label>

                                    <input type="password"
                                           name="password_confirmation"
                                           id="password_confirmation"
                                           class="form-control"
                                           placeholder="Confirme a palavra-passe">
                                </div>

                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- MÓDULO 3: DADOS PROFISSIONAIS --}}
                        <div class="mb-4">

                            <div class="d-flex align-items-center mb-3">
                                <div class="me-2 text-primary">
                                    <i class="ri-briefcase-4-line fs-4"></i>
                                </div>

                                <div>
                                    <h6 class="mb-0">Dados Profissionais</h6>
                                    <small class="text-muted">
                                        Informações relacionadas com a actividade profissional.
                                    </small>
                                </div>
                            </div>

                            <div class="row gx-3">

                                {{-- Código do funcionário --}}
                                <div class="col-md-6 mb-3">
                                    <label for="employee_id" class="form-label">
                                        Código do Funcionário <span class="text-danger">*</span>
                                    </label>

                                    <input type="text"
                                           name="employee_id"
                                           id="employee_id"
                                           class="form-control"
                                           placeholder="Ex.: NS-0001">
                                </div>

                                {{-- Data de entrada --}}
                                <div class="col-md-6 mb-3">
                                    <label for="joining_date" class="form-label">
                                        Data de Entrada <span class="text-danger">*</span>
                                    </label>

                                    <input type="date"
                                           name="joining_date"
                                           id="joining_date"
                                           class="form-control">
                                </div>

                                {{-- Função --}}
                                <div class="col-md-6 mb-3">
                                    <label for="role" class="form-label">
                                        Função
                                    </label>

                                    <select name="role"
                                            id="role"
                                            class="form-select">

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

                        <hr class="my-4">

                        {{-- MÓDULO 4: ESTADO --}}
                        <div class="mb-4">

                            <div class="d-flex align-items-center mb-3">
                                <div class="me-2 text-primary">
                                    <i class="ri-toggle-line fs-4"></i>
                                </div>

                                <div>
                                    <h6 class="mb-0">Estado do Funcionário</h6>
                                    <small class="text-muted">
                                        Defina a situação actual do funcionário no sistema.
                                    </small>
                                </div>
                            </div>

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

                        {{-- BOTÕES --}}
                        <div class="d-flex justify-content-end gap-2 border-top pt-3">

                            <a href="{{ route('employees.index') }}"
                               class="btn btn-outline-secondary">
                                <i class="ri-close-line me-1"></i>
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-primary">
                                <i class="ri-save-line me-1"></i>
                                Criar Funcionário
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
