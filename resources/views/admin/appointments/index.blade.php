
@extends('layouts.main')

@section('title', 'Consultas')

@section('page-title', 'Consultas')

@section('content')

<div class="app-body">

    {{-- Cabeçalho e botão de adicionar --}}
    <div class="row gx-3 mb-3">

        <div class="col-12 d-flex flex-wrap justify-content-between align-items-center gap-2">

            <div>
                <h5 class="mb-1">Lista de Consultas</h5>
                <p class="text-muted mb-0">
                    Consulte e acompanhe as consultas dos pacientes.
                </p>
            </div>

            <a href="{{ route('appointments.create') }}"
               class="btn btn-primary">
                <i class="ri-add-line me-1"></i>
                Adicionar Consulta
            </a>

        </div>

    </div>

    {{-- Tabela de Consultas --}}
    <div class="card">

        <div class="card-header">
            <h5 class="card-title mb-1">
                <i class="ri-calendar-check-line me-2"></i>
                Registo de Consultas
            </h5>

            <p class="text-muted mb-0">
                Lista das consultas registadas no sistema hospitalar.
            </p>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th>ID da Consulta</th>
                            <th>Nome do Paciente</th>
                            <th>Idade</th>
                            <th>Nome do Médico</th>
                            <th>Departamento</th>
                            <th>Data</th>
                            <th>Horário</th>
                            <th>Estado</th>
                            <th class="text-end">Acção</th>
                        </tr>
                    </thead>

                    <tbody>

                        {{-- Consulta 1 --}}
                        <tr>

                            <td class="fw-semibold">APT0001</td>

                            <td>
                                <div class="d-flex align-items-center gap-2">

                                    <img
                                        src="{{ asset('assets/images/user6.png') }}"
                                        width="35"
                                        height="35"
                                        class="rounded-circle object-fit-cover"
                                        alt="Paciente"
                                    >

                                    <span>Denise Stevens</span>

                                </div>
                            </td>

                            <td>35</td>

                            <td>Henry Daniels</td>

                            <td>Cardiologia</td>

                            <td>30 Dez 2018</td>

                            <td>10:00 - 11:00</td>

                            <td>
                                <span class="badge bg-danger-subtle text-danger">
                                    Inactivo
                                </span>
                            </td>

                            <td class="text-end">

                                <div class="dropdown">

                                    <button
                                        class="btn btn-light btn-sm"
                                        type="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">

                                        <i class="ri-more-2-fill"></i>

                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">

                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('appointments.edit') }}">
                                                <i class="ri-edit-line me-2"></i>
                                                Editar
                                            </a>
                                        </li>

                                        <li>
                                            <button
                                                type="button"
                                                class="dropdown-item text-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#delete_appointment">

                                                <i class="ri-delete-bin-line me-2"></i>
                                                Eliminar

                                            </button>
                                        </li>

                                    </ul>

                                </div>

                            </td>

                        </tr>

                        {{-- Consulta 2 --}}
                        <tr>

                            <td class="fw-semibold">APT0002</td>

                            <td>
                                <div class="d-flex align-items-center gap-2">

                                    <img
                                        src="{{ asset('assets/images/user6.png') }}"
                                        width="35"
                                        height="35"
                                        class="rounded-circle object-fit-cover"
                                        alt="Paciente"
                                    >

                                    <span>Denise Stevens</span>

                                </div>
                            </td>

                            <td>35</td>

                            <td>Henry Daniels</td>

                            <td>Cardiologia</td>

                            <td>30 Dez 2018</td>

                            <td>10:00 - 11:00</td>

                            <td>
                                <span class="badge bg-success-subtle text-success">
                                    Activo
                                </span>
                            </td>

                            <td class="text-end">

                                <div class="dropdown">

                                    <button
                                        class="btn btn-light btn-sm"
                                        type="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">

                                        <i class="ri-more-2-fill"></i>

                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">

                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('appointments.edit') }}">
                                                <i class="ri-edit-line me-2"></i>
                                                Editar
                                            </a>
                                        </li>

                                        <li>
                                            <button
                                                type="button"
                                                class="dropdown-item text-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#delete_appointment">

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

</div>

{{-- Modal de confirmação de eliminação --}}
<div class="modal fade"
     id="delete_appointment"
     tabindex="-1"
     aria-labelledby="deleteAppointmentLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body text-center p-4">

                <div class="mb-3">
                    <i class="ri-delete-bin-line text-danger"
                       style="font-size: 55px;"></i>
                </div>

                <h5 class="mb-2" id="deleteAppointmentLabel">
                    Eliminar Consulta
                </h5>

                <p class="text-muted mb-4">
                    Tem a certeza de que deseja eliminar esta consulta?
                    Esta acção não poderá ser desfeita.
                </p>

                <div class="d-flex justify-content-center gap-2">

                    <button
                        type="button"
                        class="btn btn-light"
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

@endsection
