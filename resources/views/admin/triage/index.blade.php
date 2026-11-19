
@extends('layouts.main')

@section('title', 'Lista de Triagens')
@section('page-title', 'Lista de Triagens')

@section('content')

<div class="app-body">

    {{-- Cabeçalho --}}
    <div class="row gx-3 mb-3">
        <div class="col-sm-12">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                <div>
                    <h5 class="mb-1">Triagem</h5>
                    <p class="text-muted mb-0">
                        Gestão e acompanhamento das triagens dos pacientes.
                    </p>
                </div>

                <a href="{{ route('triage.create') }}" class="btn btn-primary">
                    <i class="ri-add-line me-1"></i>
                    Nova Triagem
                </a>
            </div>
        </div>
    </div>

  

    {{-- Tabela --}}
    <div class="row gx-3">
        <div class="col-sm-12">

            <div class="card">

              

                <div class="card-body">

                    {{-- Filtros --}}
                    <form action="{{ route('triage.index') }}" method="GET">

                        <div class="row gx-3 mb-3">

                            <div class="col-lg-4 col-md-6 mb-3">
                                <label class="form-label">Pesquisar</label>
                                <input
                                    type="text"
                                    name="search"
                                    class="form-control"
                                    placeholder="Pesquisar por queixa principal"
                                    value="{{ request('search') }}"
                                >
                            </div>

                            <div class="col-lg-3 col-md-6 mb-3">
                                <label class="form-label">Classificação de Risco</label>
                                <select name="risk_level" class="form-select">
                                    <option value="">Todas</option>
                                    <option value="emergency" {{ request('risk_level') == 'emergency' ? 'selected' : '' }}>
                                        Emergência
                                    </option>
                                    <option value="very_urgent" {{ request('risk_level') == 'very_urgent' ? 'selected' : '' }}>
                                        Muito Urgente
                                    </option>
                                    <option value="urgent" {{ request('risk_level') == 'urgent' ? 'selected' : '' }}>
                                        Urgente
                                    </option>
                                    <option value="less_urgent" {{ request('risk_level') == 'less_urgent' ? 'selected' : '' }}>
                                        Pouco Urgente
                                    </option>
                                    <option value="non_urgent" {{ request('risk_level') == 'non_urgent' ? 'selected' : '' }}>
                                        Não Urgente
                                    </option>
                                </select>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-3">
                                <label class="form-label">Estado</label>
                                <select name="status" class="form-select">
                                    <option value="">Todos</option>
                                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>
                                        Pendente
                                    </option>
                                    <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>
                                        Em Avaliação
                                    </option>
                                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>
                                        Concluída
                                    </option>
                                </select>
                            </div>

                            <div class="col-lg-2 col-md-6 mb-3 d-flex align-items-end">
                                <button type="submit" class="btn btn-outline-primary w-100">
                                    <i class="ri-search-line me-1"></i>
                                    Pesquisar
                                </button>
                            </div>

                        </div>

                    </form>

                    {{-- Tabela de resultados --}}
                    <div class="table-responsive">

                        <table class="table align-middle table-hover">

                            <thead>
                                <tr>
                                    <th>N.º</th>
                                    <th>Queixa Principal</th>
                                    <th>Data</th>
                                    <th>Temperatura</th>
                                    <th>Pressão Arterial</th>
                                    <th>Classificação</th>
                                    <th>Estado</th>
                                    <th class="text-end">Acções</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse($triages as $triage)

                                    <tr>
                                        <td>
                                            TRI-{{ str_pad($triage->id, 4, '0', STR_PAD_LEFT) }}
                                        </td>

                                        <td>
                                            <div class="fw-semibold">
                                                {{ Str::limit($triage->main_complaint, 35) }}
                                            </div>
                                        </td>

                                        <td>
                                            {{ $triage->created_at?->format('d/m/Y') }}
                                            <br>
                                            <small class="text-muted">
                                                {{ $triage->created_at?->format('H:i') }}
                                            </small>
                                        </td>

                                        <td>
                                            {{ $triage->temperature !== null ? number_format($triage->temperature, 1, ',', '.') . ' °C' : '—' }}
                                        </td>

                                        <td>
                                            {{ $triage->blood_pressure ?? '—' }}
                                            @if($triage->blood_pressure)
                                                mmHg
                                            @endif
                                        </td>

                                        <td>
                                            @switch($triage->risk_level)

                                                @case('emergency')
                                                    <span class="badge bg-danger-subtle text-danger">
                                                        Emergência
                                                    </span>
                                                    @break

                                                @case('very_urgent')
                                                    <span class="badge bg-danger-subtle text-danger">
                                                        Muito Urgente
                                                    </span>
                                                    @break

                                                @case('urgent')
                                                    <span class="badge bg-warning-subtle text-warning">
                                                        Urgente
                                                    </span>
                                                    @break

                                                @case('less_urgent')
                                                    <span class="badge bg-info-subtle text-info">
                                                        Pouco Urgente
                                                    </span>
                                                    @break

                                                @case('non_urgent')
                                                    <span class="badge bg-success-subtle text-success">
                                                        Não Urgente
                                                    </span>
                                                    @break

                                                @default
                                                    <span class="badge bg-secondary-subtle text-secondary">
                                                        Não definido
                                                    </span>

                                            @endswitch
                                        </td>

                                        <td>
                                            @switch($triage->status)

                                                @case('pending')
                                                    <span class="badge bg-secondary-subtle text-secondary">
                                                        Pendente
                                                    </span>
                                                    @break

                                                @case('in_progress')
                                                    <span class="badge bg-warning-subtle text-warning">
                                                        Em Avaliação
                                                    </span>
                                                    @break

                                                @case('completed')
                                                    <span class="badge bg-success-subtle text-success">
                                                        Concluída
                                                    </span>
                                                    @break

                                            @endswitch
                                        </td>

                                        <td class="text-end">
                                            <a
                                                href="{{ route('triage.show', $triage->id) }}"
                                                class="btn btn-sm btn-outline-primary"
                                                title="Visualizar"
                                            >
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </td>
                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="8" class="text-center py-4">
                                            <i class="ri-inbox-line fs-2 text-muted"></i>
                                            <p class="text-muted mb-0 mt-2">
                                                Nenhuma triagem encontrada.
                                            </p>
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                    {{-- Paginação --}}
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mt-3">

                        <small class="text-muted">
                            A mostrar {{ $triages->firstItem() ?? 0 }}
                            a {{ $triages->lastItem() ?? 0 }}
                            de {{ $triages->total() }} registos
                        </small>

                        {{ $triages->appends(request()->query())->links() }}

                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
