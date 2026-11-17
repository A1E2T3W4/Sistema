
@extends('layouts.main')

@section('title', 'Horário dos Médicos')
@section('page-title', 'Horário dos Médicos')

@section('content')

<div class="app-body">

    {{-- Título e botão de adicionar --}}
    <div class="row gx-3">
        <div class="col-12">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-3">

                <div>
                    <h5 class="mb-1">Horário dos Médicos</h5>
                    <p class="text-muted mb-0">
                        Consulte e faça a gestão dos horários e da disponibilidade dos médicos.
                    </p>
                </div>

                <a href="{{ url('/schedules/create') }}" class="btn btn-primary">
                    <i class="ri-add-line me-1"></i>
                    Adicionar Horário
                </a>

            </div>

        </div>
    </div>

    {{-- Tabela de horários --}}
    <div class="row gx-3">
        <div class="col-12">

            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">Lista de Horários</h5>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover align-middle">

                            <thead>
                                <tr>
                                    <th>Médico</th>
                                    <th>Departamento</th>
                                    <th>Dias Disponíveis</th>
                                    <th>Horário Disponível</th>
                                    <th>Estado</th>
                                    <th class="text-end">Acção</th>
                                </tr>
                            </thead>

                            <tbody>

                                {{-- Horário 1 --}}
                                <tr>

                                    <td>
                                        <div class="d-flex align-items-center gap-2">

                                            <img
                                                src="{{ asset('assets/images/user6.png') }}"
                                                width="38"
                                                height="38"
                                                class="rounded-circle object-fit-cover"
                                                alt="Fotografia do médico"
                                            >

                                            <div>
                                                <h6 class="mb-0">Henry Daniels</h6>
                                                <small class="text-muted">Médico</small>
                                            </div>

                                        </div>
                                    </td>

                                    <td>Cardiologia</td>

                                    <td>
                                        <span class="text-muted">
                                            Domingo, Segunda-feira, Terça-feira
                                        </span>
                                    </td>

                                    <td>
                                        <i class="ri-time-line text-primary me-1"></i>
                                        10:00 - 19:00
                                    </td>

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
                                                aria-expanded="false"
                                                aria-label="Acções do horário">

                                                <i class="ri-more-2-fill"></i>

                                            </button>

                                            <ul class="dropdown-menu dropdown-menu-end">

                                                <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="{{ url('/schedules/edit') }}">

                                                        <i class="ri-edit-line me-2"></i>
                                                        Editar

                                                    </a>
                                                </li>

                                                <li>
                                                    <button
                                                        class="dropdown-item text-danger"
                                                        type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_schedule">

                                                        <i class="ri-delete-bin-line me-2"></i>
                                                        Eliminar

                                                    </button>
                                                </li>

                                            </ul>

                                        </div>

                                    </td>

                                </tr>

                                {{-- Quando não existirem horários, apresentar esta linha --}}
                                {{-- 
                                <tr>
                                    <td colspan="6" class="text-center py-4">
                                        <i class="ri-calendar-close-line fs-1 text-muted"></i>
                                        <p class="text-muted mb-0 mt-2">
                                            Nenhum horário registado.
                                        </p>
                                    </td>
                                </tr>
                                --}}

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>
    </div>

</div>

{{-- Modal de confirmação de eliminação --}}
<div
    class="modal fade"
    id="delete_schedule"
    tabindex="-1"
    aria-labelledby="deleteScheduleLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body text-center p-4">

                <div class="mb-3">
                    <div class="avatar avatar-xl bg-danger-subtle rounded-circle d-inline-flex align-items-center justify-content-center">
                        <i class="ri-delete-bin-line fs-2 text-danger"></i>
                    </div>
                </div>

                <h5 id="deleteScheduleLabel" class="mb-2">
                    Eliminar Horário?
                </h5>

                <p class="text-muted mb-4">
                    Tem a certeza de que deseja eliminar este horário?
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
