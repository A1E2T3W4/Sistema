@extends('layouts.main')

@section('title', 'Consultas')
@section('page-title', 'Consultas')

@section('content')

<div class="app-body">

 

    {{-- Cabeçalho --}}
    <div class="row gx-3 mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center flex-wrap gap-2">

            <div>
                <h5 class="mb-1">Lista de Consultas</h5>
                <p class="text-muted mb-0">
                    Consulte e acompanhe as consultas dos pacientes.
                </p>
            </div>

            <a href="{{ route('appointments.create') }}" class="btn btn-primary">
                <i class="ri-add-line me-1"></i>
                Adicionar Consulta
            </a>

        </div>
    </div>

    {{-- Tabela --}}
    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">

            <div>
                <h5 class="card-title mb-1">Registo de Consultas</h5>
                <p class="text-muted mb-0">
                    Lista de todas as consultas registadas no sistema.
                </p>
            </div>

            <span class="badge bg-light text-dark">
                Total: {{ $appointments->total() }}
            </span>

        </div>

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">N.º</th>
                            <th>Paciente</th>
                            <th>Médico</th>
                            <th>Enfermeiro Responsável</th>
                            <th>Observação da Consulta</th>
                            <th>Estado</th>
                            <th class="text-end pe-4">Acções</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($appointments as $appointment)

                        <tr>

                            {{-- Número --}}
                            <td class="ps-4">
                                <span class="fw-semibold">
                                    {{ $appointments->firstItem() + $loop->index }}
                                </span>
                            </td>

                            {{-- Paciente --}}
                            <td>
                                {{ $appointment->patient_id ?? 'Não informado' }}
                            </td>

                            {{-- Médico --}}
                            <td>
                                {{ $appointment->doctor ?? 'Não informado' }}
                            </td>

                            {{-- Enfermeiro --}}
                            <td>
                                {{ $appointment->nurse ?? 'Não informado' }}
                            </td>

                            {{-- Observação --}}
                            <td>
                                <div style="max-width: 300px; min-width: 180px;">
                                    {{ $appointment->message ?: 'Sem observação' }}
                                </div>
                            </td>

                            {{-- Estado --}}
                            <td>
                                @if($appointment->status == 'active')
                                <span class="badge bg-success-subtle text-success rounded-pill px-3 py-2">
                                    Activa
                                </span>
                                @else
                                <span class="badge bg-danger-subtle text-danger rounded-pill px-3 py-2">
                                    Inactiva
                                </span>
                                @endif
                            </td>

                            {{-- Acções --}}
                            <td class="text-end pe-4">

                                <div class="d-inline-flex align-items-center gap-2">

                                    <a href="{{ route('appointments.edit', $appointment->id) }}"
                                        class="btn btn-light btn-sm"
                                        title="Editar consulta">

                                        <i class="ri-edit-line text-primary"></i>

                                    </a>

                                    <button
                                        type="button"
                                        class="btn btn-light btn-sm"
                                        title="Eliminar"
                                        data-bs-toggle="modal"
                                        data-bs-target="#delete_appointment_{{ $appointment->id }}">

                                        <i class="ri-delete-bin-line text-danger"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="7" class="text-center py-5">

                                <i class="ri-calendar-check-line text-muted"
                                    style="font-size: 40px;"></i>

                                <h6 class="mt-3 mb-1">
                                    Nenhuma consulta encontrada
                                </h6>

                                <p class="text-muted mb-0">
                                    Ainda não existem consultas registadas.
                                </p>

                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

        {{-- Paginação --}}
        @if($appointments->hasPages())
        <div class="card-footer bg-white">
            {{ $appointments->links() }}
        </div>
        @endif

    </div>

</div>

{{-- Modais de eliminação --}}
@foreach($appointments as $appointment)

<div class="modal fade"
    id="delete_appointment_{{ $appointment->id }}"
    tabindex="-1"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body text-center p-4">

                <div class="mb-3">
                    <i class="ri-delete-bin-line text-danger"
                        style="font-size: 50px;"></i>
                </div>

                <h5 class="mb-2">Eliminar Consulta</h5>

                <p class="text-muted mb-4">
                    Tem a certeza de que deseja eliminar esta consulta?
                    Esta acção não poderá ser desfeita.
                </p>

                <form action="{{ route('appointments.destroy', $appointment->id) }}"
                    method="POST">

                    @csrf
                    @method('DELETE')

                    <div class="d-flex justify-content-center gap-2">

                        <button type="button"
                            class="btn btn-light"
                            data-bs-dismiss="modal">
                            Cancelar
                        </button>

                        <button type="submit" class="btn btn-danger">
                            <i class="ri-delete-bin-line me-1"></i>
                            Sim, eliminar
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endforeach

@endsection