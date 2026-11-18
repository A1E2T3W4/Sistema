
@extends('layouts.main')

@section('title', 'Histórico de Triagens')
@section('page-title', 'Histórico de Triagens')

@section('content')

<div class="app-body">

    {{-- Cabeçalho --}}
    <div class="row gx-3 mb-3">
        <div class="col-sm-12">
            <div>
                <h5 class="mb-1">Histórico de Triagens</h5>
                <p class="text-muted mb-0">
                    Consulta dos registos anteriores de triagem dos pacientes.
                </p>
            </div>
        </div>
    </div>

    {{-- Pesquisa e filtros --}}
    <div class="row gx-3">
        <div class="col-sm-12">

            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">Pesquisar Histórico</h5>
                </div>

                <div class="card-body">

                    <div class="row gx-3">

                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="patient_search" class="form-label">
                                    Paciente
                                </label>

                                <input type="text" id="patient_search"
                                    class="form-control"
                                    placeholder="Nome ou número do processo">
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="start_date" class="form-label">
                                    Data Inicial
                                </label>

                                <input type="date" id="start_date"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="end_date" class="form-label">
                                    Data Final
                                </label>

                                <input type="date" id="end_date"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="risk_level" class="form-label">
                                    Classificação de Risco
                                </label>

                                <select id="risk_level" class="form-select">
                                    <option value="">Todas</option>
                                    <option>Emergência</option>
                                    <option>Muito Urgente</option>
                                    <option>Urgente</option>
                                    <option>Pouco Urgente</option>
                                    <option>Não Urgente</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="d-flex justify-content-end gap-2">

                                <button type="button"
                                    class="btn btn-outline-secondary">
                                    <i class="ri-refresh-line me-1"></i>
                                    Limpar
                                </button>

                                <button type="button" class="btn btn-primary">
                                    <i class="ri-search-line me-1"></i>
                                    Pesquisar
                                </button>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    {{-- Histórico --}}
    <div class="row gx-3">
        <div class="col-sm-12">

            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">Registos Anteriores</h5>
                </div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table align-middle table-hover">

                            <thead>
                                <tr>
                                    <th>N.º Triagem</th>
                                    <th>Paciente</th>
                                    <th>Data</th>
                                    <th>Temperatura</th>
                                    <th>Pressão Arterial</th>
                                    <th>Classificação</th>
                                    <th>Profissional</th>
                                    <th class="text-end">Acções</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>TRI-0001</td>
                                    <td>
                                        <div class="fw-semibold">Maria José</div>
                                        <small class="text-muted">PAC-001</small>
                                    </td>
                                    <td>15/11/2026</td>
                                    <td>37,2 °C</td>
                                    <td>120/80 mmHg</td>
                                    <td>
                                        <span class="badge bg-warning-subtle text-warning">
                                            Urgente
                                        </span>
                                    </td>
                                    <td>Enf. Ana Costa</td>
                                    <td class="text-end">
                                       <a href="{{ route('triage.detalhe') }}"
                                          class="btn btn-sm btn-light"
                                          title="Ver Triagem">
                                        <i class="ri-eye-line"></i>
                                    </a> 
                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td>TRI-0002</td>
                                    <td>
                                        <div class="fw-semibold">Maria José</div>
                                        <small class="text-muted">PAC-001</small>
                                    </td>
                                    <td>10/10/2026</td>
                                    <td>36,8 °C</td>
                                    <td>118/78 mmHg</td>
                                    <td>
                                        <span class="badge bg-success-subtle text-success">
                                            Pouco Urgente
                                        </span>
                                    </td>
                                    <td>Enf. Paulo Manuel</td>
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
                                        <div class="fw-semibold">João Manuel</div>
                                        <small class="text-muted">PAC-002</small>
                                    </td>
                                    <td>05/10/2026</td>
                                    <td>38,5 °C</td>
                                    <td>130/85 mmHg</td>
                                    <td>
                                        <span class="badge bg-danger-subtle text-danger">
                                            Muito Urgente
                                        </span>
                                    </td>
                                    <td>Enf. Ana Costa</td>
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

                        <small class="text-muted">
                            A mostrar 1 a 3 de 3 registos
                        </small>

                        <nav>
                            <ul class="pagination pagination-sm mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">Anterior</a>
                                </li>

                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>

                                <li class="page-item disabled">
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
