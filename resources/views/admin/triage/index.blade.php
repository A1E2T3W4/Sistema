
@extends('layouts.main')

@section('title', 'Lista de Triagens')
@section('page-title', 'Lista de Triagens')

@section('content')

<div class="app-body">

    {{-- Cabeçalho e botão --}}
    <div class="row gx-3 mb-3">
        <div class="col-sm-12">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                <div>
                    <h5 class="mb-1">Lista de Triagens</h5>
                    <p class="text-muted mb-0">Gestão e acompanhamento das triagens dos pacientes.</p>
                </div>

                <a href="#" class="btn btn-primary">
                    <i class="ri-add-line me-1"></i>
                    Nova Triagem
                </a>
            </div>
        </div>
    </div>

    {{-- Indicadores --}}
    <div class="row gx-3">

        <div class="col-xxl-3 col-lg-6 col-sm-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted mb-1">Total de Triagens</p>
                            <h4 class="mb-0">125</h4>
                        </div>
                        <div class="avatar avatar-lg bg-primary-subtle rounded">
                            <i class="ri-file-list-3-line fs-3 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-lg-6 col-sm-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted mb-1">Pendentes</p>
                            <h4 class="mb-0">18</h4>
                        </div>
                        <div class="avatar avatar-lg bg-warning-subtle rounded">
                            <i class="ri-time-line fs-3 text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-lg-6 col-sm-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted mb-1">Em Avaliação</p>
                            <h4 class="mb-0">12</h4>
                        </div>
                        <div class="avatar avatar-lg bg-info-subtle rounded">
                            <i class="ri-stethoscope-line fs-3 text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-lg-6 col-sm-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted mb-1">Concluídas</p>
                            <h4 class="mb-0">95</h4>
                        </div>
                        <div class="avatar avatar-lg bg-success-subtle rounded">
                            <i class="ri-checkbox-circle-line fs-3 text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Tabela de Triagens --}}
    <div class="row gx-3">
        <div class="col-sm-12">

            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">Registos de Triagem</h5>
                </div>

                <div class="card-body">

                    {{-- Filtros --}}
                    <div class="row gx-3 mb-3">

                        <div class="col-lg-4 col-md-6 mb-3">
                            <label class="form-label">Pesquisar Paciente</label>
                            <input type="text" class="form-control"
                                placeholder="Nome ou número do processo">
                        </div>

                        <div class="col-lg-3 col-md-6 mb-3">
                            <label class="form-label">Classificação de Risco</label>
                            <select class="form-select">
                                <option value="">Todas</option>
                                <option>Emergência</option>
                                <option>Muito Urgente</option>
                                <option>Urgente</option>
                                <option>Pouco Urgente</option>
                                <option>Não Urgente</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-3">
                            <label class="form-label">Estado</label>
                            <select class="form-select">
                                <option value="">Todos</option>
                                <option>Pendente</option>
                                <option>Em Avaliação</option>
                                <option>Concluída</option>
                            </select>
                        </div>

                        <div class="col-lg-2 col-md-6 mb-3 d-flex align-items-end">
                            <button type="button" class="btn btn-outline-primary w-100">
                                <i class="ri-search-line me-1"></i>
                                Pesquisar
                            </button>
                        </div>

                    </div>

                    {{-- Tabela --}}
                    <div class="table-responsive">
                        <table class="table align-middle table-hover">
                            <thead>
                                <tr>
                                    <th>N.º</th>
                                    <th>Paciente</th>
                                    <th>Data</th>
                                    <th>Temperatura</th>
                                    <th>Pressão Arterial</th>
                                    <th>Classificação</th>
                                    <th>Estado</th>
                                    <th class="text-end">Acções</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>TRI-0001</td>
                                    <td>
                                        <div class="fw-semibold">Maria José</div>
                                        <small class="text-muted">Processo: PAC-001</small>
                                    </td>
                                    <td>18/11/2026</td>
                                    <td>37,2 °C</td>
                                    <td>120/80 mmHg</td>
                                    <td>
                                        <span class="badge bg-warning-subtle text-warning">
                                            Urgente
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success-subtle text-success">
                                            Concluída
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-outline-primary"
                                            title="Visualizar">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>TRI-0002</td>
                                    <td>
                                        <div class="fw-semibold">João Manuel</div>
                                        <small class="text-muted">Processo: PAC-002</small>
                                    </td>
                                    <td>18/11/2026</td>
                                    <td>38,5 °C</td>
                                    <td>130/85 mmHg</td>
                                    <td>
                                        <span class="badge bg-danger-subtle text-danger">
                                            Muito Urgente
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning-subtle text-warning">
                                            Em Avaliação
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-outline-primary"
                                            title="Visualizar">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>TRI-0003</td>
                                    <td>
                                        <div class="fw-semibold">Ana Paula</div>
                                        <small class="text-muted">Processo: PAC-003</small>
                                    </td>
                                    <td>17/11/2026</td>
                                    <td>36,8 °C</td>
                                    <td>115/75 mmHg</td>
                                    <td>
                                        <span class="badge bg-success-subtle text-success">
                                            Pouco Urgente
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary-subtle text-secondary">
                                            Pendente
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-outline-primary"
                                            title="Visualizar">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    {{-- Paginação demonstrativa --}}
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mt-3">
                        <small class="text-muted">A mostrar 1 a 3 de 125 registos</small>

                        <nav>
                            <ul class="pagination pagination-sm mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">Anterior</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Seguinte</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
