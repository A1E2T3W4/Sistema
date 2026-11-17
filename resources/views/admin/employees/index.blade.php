
@extends('layouts.main')

@section('title', 'Funcionários')

@section('page-title', 'Funcionários')

@section('content')

<div class="app-body">

    {{-- Título e botão --}}
    <div class="row gx-3 align-items-center mb-3">
        <div class="col-sm-6">
            <h4 class="mb-0">Funcionários</h4>
            <p class="text-muted mb-0">Gestão dos funcionários da instituição.</p>
        </div>

        <div class="col-sm-6 text-sm-end mt-3 mt-sm-0">
            <a href="{{ route('employees.create') }}" class="btn btn-primary">
                <i class="ri-user-add-line me-1"></i>
                Adicionar Funcionário
            </a>
        </div>
    </div>

    {{-- Filtros --}}
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="card-title mb-0">
                <i class="ri-filter-3-line me-2"></i>
                Pesquisar Funcionários
            </h5>
        </div>

        <div class="card-body">
            <form action="#" method="GET">
                <div class="row gx-3 align-items-end">

                    <div class="col-md-3 col-sm-6 mb-3">
                        <label for="employee_code" class="form-label">
                            Código do Funcionário
                        </label>

                        <input type="text"
                               name="employee_code"
                               id="employee_code"
                               class="form-control"
                               placeholder="Ex.: NS-0001">
                    </div>

                    <div class="col-md-3 col-sm-6 mb-3">
                        <label for="employee_name" class="form-label">
                            Nome do Funcionário
                        </label>

                        <input type="text"
                               name="employee_name"
                               id="employee_name"
                               class="form-control"
                               placeholder="Pesquisar por nome">
                    </div>

                    <div class="col-md-3 col-sm-6 mb-3">
                        <label for="role" class="form-label">
                            Função
                        </label>

                        <select name="role" id="role" class="form-select">
                            <option value="">Todas as funções</option>
                            <option value="Enfermeiro">Enfermeiro</option>
                            <option value="Farmacêutico">Farmacêutico</option>
                            <option value="Técnico de Laboratório">Técnico de Laboratório</option>
                            <option value="Contabilista">Contabilista</option>
                            <option value="Recepcionista">Recepcionista</option>
                            <option value="Médico">Médico</option>
                        </select>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-3">
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="ri-search-line me-1"></i>
                            Pesquisar
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    {{-- Tabela de Funcionários --}}
    <div class="card">

        <div class="card-header">
            <h5 class="card-title mb-0">
                Lista de Funcionários
            </h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle">

                    <thead>
                        <tr>
                            <th style="min-width: 200px;">Funcionário</th>
                            <th>Código</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th style="min-width: 130px;">Data de Entrada</th>
                            <th>Função</th>
                            <th class="text-end">Acção</th>
                        </tr>
                    </thead>

                    <tbody>

                        {{-- Funcionário 1 --}}
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/user6.png') }}"
                                         width="40"
                                         height="40"
                                         class="rounded-circle me-2"
                                         alt="Albina Simonis">

                                    <div>
                                        <h6 class="mb-0">Albina Simonis</h6>
                                        <small class="text-muted">Funcionário</small>
                                    </div>
                                </div>
                            </td>

                            <td>NS-0001</td>
                            <td>albinasimonis@example.com</td>
                            <td>828-634-2744</td>
                            <td>7 Maio 2015</td>
                            <td>
                                <span class="badge bg-success-subtle text-success">
                                    Enfermeiro
                                </span>
                            </td>

                            <td class="text-end">
                                <div class="dropdown">
                                    <button class="btn btn-light btn-sm"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('employees.edit') }}">
                                                <i class="ri-edit-line me-2"></i>
                                                Editar
                                            </a>
                                        </li>
                                        <li>
                                            <button class="dropdown-item text-danger"
                                                    type="button"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#delete_employee">
                                                <i class="ri-delete-bin-line me-2"></i>
                                                Eliminar
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        {{-- Funcionário 2 --}}
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/user6.png') }}"
                                         width="40"
                                         height="40"
                                         class="rounded-circle me-2"
                                         alt="Cristina Groves">

                                    <div>
                                        <h6 class="mb-0">Cristina Groves</h6>
                                        <small class="text-muted">Funcionário</small>
                                    </div>
                                </div>
                            </td>

                            <td>DR-0001</td>
                            <td>cristinagroves@example.com</td>
                            <td>928-344-5176</td>
                            <td>1 Janeiro 2013</td>
                            <td>
                                <span class="badge bg-primary-subtle text-primary">
                                    Médico
                                </span>
                            </td>

                            <td class="text-end">
                                <div class="dropdown">
                                    <button class="btn btn-light btn-sm"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('employees.edit') }}">
                                                <i class="ri-edit-line me-2"></i>
                                                Editar
                                            </a>
                                        </li>
                                        <li>
                                            <button class="dropdown-item text-danger"
                                                    type="button"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#delete_employee">
                                                <i class="ri-delete-bin-line me-2"></i>
                                                Eliminar
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        {{-- Funcionário 3 --}}
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/user6.png') }}"
                                         width="40"
                                         height="40"
                                         class="rounded-circle me-2"
                                         alt="Mary Mericle">

                                    <div>
                                        <h6 class="mb-0">Mary Mericle</h6>
                                        <small class="text-muted">Funcionário</small>
                                    </div>
                                </div>
                            </td>

                            <td>SF-0003</td>
                            <td>marymericle@example.com</td>
                            <td>603-831-4983</td>
                            <td>27 Dezembro 2017</td>
                            <td>
                                <span class="badge bg-secondary-subtle text-secondary">
                                    Contabilista
                                </span>
                            </td>

                            <td class="text-end">
                                <div class="dropdown">
                                    <button class="btn btn-light btn-sm"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('employees.edit') }}">
                                                <i class="ri-edit-line me-2"></i>
                                                Editar
                                            </a>
                                        </li>
                                        <li>
                                            <button class="dropdown-item text-danger"
                                                    type="button"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#delete_employee">
                                                <i class="ri-delete-bin-line me-2"></i>
                                                Eliminar
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        {{-- Funcionário 4 --}}
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/user6.png') }}"
                                         width="40"
                                         height="40"
                                         class="rounded-circle me-2"
                                         alt="Haylie Feeney">

                                    <div>
                                        <h6 class="mb-0">Haylie Feeney</h6>
                                        <small class="text-muted">Funcionário</small>
                                    </div>
                                </div>
                            </td>

                            <td>SF-0002</td>
                            <td>hayliefeeney@example.com</td>
                            <td>616-774-4962</td>
                            <td>21 Abril 2017</td>
                            <td>
                                <span class="badge bg-info-subtle text-info">
                                    Técnico de Laboratório
                                </span>
                            </td>

                            <td class="text-end">
                                <div class="dropdown">
                                    <button class="btn btn-light btn-sm"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('employees.edit') }}">
                                                <i class="ri-edit-line me-2"></i>
                                                Editar
                                            </a>
                                        </li>
                                        <li>
                                            <button class="dropdown-item text-danger"
                                                    type="button"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#delete_employee">
                                                <i class="ri-delete-bin-line me-2"></i>
                                                Eliminar
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        {{-- Funcionário 5 --}}
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/user6.png') }}"
                                         width="40"
                                         height="40"
                                         class="rounded-circle me-2"
                                         alt="Zoe Butler">

                                    <div>
                                        <h6 class="mb-0">Zoe Butler</h6>
                                        <small class="text-muted">Funcionário</small>
                                    </div>
                                </div>
                            </td>

                            <td>SF-0001</td>
                            <td>zoebutler@example.com</td>
                            <td>444-555-9999</td>
                            <td>19 Maio 2012</td>
                            <td>
                                <span class="badge bg-warning-subtle text-warning">
                                    Farmacêutico
                                </span>
                            </td>

                            <td class="text-end">
                                <div class="dropdown">
                                    <button class="btn btn-light btn-sm"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('employees.edit') }}">
                                                <i class="ri-edit-line me-2"></i>
                                                Editar
                                            </a>
                                        </li>
                                        <li>
                                            <button class="dropdown-item text-danger"
                                                    type="button"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#delete_employee">
                                                <i class="ri-delete-bin-line me-2"></i>
                                                Eliminar
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modal de confirmação --}}
    <div class="modal fade" id="delete_employee" tabindex="-1"
         aria-labelledby="deleteEmployeeLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body text-center p-4">

                    <div class="mb-3">
                        <i class="ri-error-warning-line text-danger"
                           style="font-size: 48px;"></i>
                    </div>

                    <h5 id="deleteEmployeeLabel" class="mb-2">
                        Eliminar Funcionário?
                    </h5>

                    <p class="text-muted">
                        Tem a certeza de que pretende eliminar este funcionário?
                        Esta acção não poderá ser desfeita.
                    </p>

                    <div class="d-flex justify-content-center gap-2 mt-4">

                        <button type="button"
                                class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">
                            Cancelar
                        </button>

                        <button type="button" class="btn btn-danger">
                            <i class="ri-delete-bin-line me-1"></i>
                            Eliminar
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
