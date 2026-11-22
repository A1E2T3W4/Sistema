
@extends('layouts.main')

@section('title', 'Ver Triagem')
@section('page-title', 'Ver Triagem')

@section('content')

<div class="app-body">

    {{-- Cabeçalho --}}
    <div class="row gx-3 mb-3">
        <div class="col-sm-12">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">

                <div>
                    <h5 class="mb-1">Detalhes da Triagem</h5>
                    <p class="text-muted mb-0">
                        Consulta das informações registadas na triagem.
                    </p>
                </div>

                <span class="badge bg-primary-subtle text-primary fs-6">
                    TRI-{{ str_pad($triage->id, 4, '0', STR_PAD_LEFT) }}
                </span>

            </div>
        </div>
    </div>

    {{-- Identificação e Data --}}
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-file-list-3-line me-2 text-primary"></i>
                        Informação da Triagem
                    </h5>
                </div>

                <div class="card-body">
                    <div class="row gx-3">

                        <div class="col-md-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">N.º da Triagem</small>
                            <h6 class="mb-0">
                                TRI-{{ str_pad($triage->id, 4, '0', STR_PAD_LEFT) }}
                            </h6>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Data da Triagem</small>
                            <h6 class="mb-0">
                                {{ $triage->triageDate
                                    ? \Carbon\Carbon::parse($triage->triageDate)->format('d/m/Y')
                                    : 'Não informado' }}
                            </h6>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Hora da Triagem</small>
                            <h6 class="mb-0">
                                {{ $triage->triagetime ?? 'Não informado' }}
                            </h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Sinais Vitais --}}
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-heart-pulse-line me-2 text-danger"></i>
                        Sinais Vitais
                    </h5>
                </div>

                <div class="card-body">
                    <div class="row gx-3">

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Temperatura</small>
                                <h5 class="mb-0">
                                    {{ $triage->temperature !== null ? $triage->temperature . ' °C' : 'Não informado' }}
                                </h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Pressão Arterial</small>
                                <h5 class="mb-0">
                                    {{ $triage->bloodPressure ?? 'Não informado' }}
                                </h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Frequência Cardíaca</small>
                                <h5 class="mb-0">
                                    {{ $triage->heartRate !== null ? $triage->heartRate . ' bpm' : 'Não informado' }}
                                </h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Frequência Respiratória</small>
                                <h5 class="mb-0">
                                    {{ $triage->respiratoryRate !== null ? $triage->respiratoryRate . ' rpm' : 'Não informado' }}
                                </h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Saturação de Oxigénio</small>
                                <h5 class="mb-0">
                                    {{ $triage->oxygenSaturation !== null ? $triage->oxygenSaturation . '%' : 'Não informado' }}
                                </h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Peso</small>
                                <h5 class="mb-0">
                                    {{ $triage->weight !== null ? $triage->weight . ' kg' : 'Não informado' }}
                                </h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Altura</small>
                                <h5 class="mb-0">
                                    {{ $triage->height !== null ? $triage->height . ' cm' : 'Não informado' }}
                                </h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Avaliação Inicial --}}
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-file-text-line me-2 text-primary"></i>
                        Avaliação Inicial
                    </h5>
                </div>

                <div class="card-body">
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <small class="text-muted d-block">Observações</small>
                            <p class="mb-0">
                                {{ $triage->observations ?: 'Não existem observações registadas.' }}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Classificação de Risco --}}
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-alarm-warning-line me-2 text-warning"></i>
                        Classificação de Risco
                    </h5>
                </div>

                <div class="card-body">
                    @php
                        $classificacoes = [
                            'emergency' => ['Emergência', 'danger'],
                            'very_urgent' => ['Muito Urgente', 'danger'],
                            'urgent' => ['Urgente', 'warning'],
                            'less_urgent' => ['Pouco Urgente', 'info'],
                            'non_urgent' => ['Não Urgente', 'success'],
                        ];

                        $risco = $classificacoes[$triage->riskClassification] ?? ['Não classificado', 'secondary'];
                    @endphp

                    <div class="row gx-3">

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Classificação de Risco</small>
                            <span class="badge bg-{{ $risco[1] }}-subtle text-{{ $risco[1] }} fs-6">
                                {{ $risco[0] }}
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Registo --}}
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-time-line me-2 text-primary"></i>
                        Informação do Registo
                    </h5>
                </div>

                <div class="card-body">
                    <div class="row gx-3">

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Data do Registo</small>
                            <h6 class="mb-0">
                                {{ $triage->created_at?->format('d/m/Y') ?? 'Não informado' }}
                            </h6>
                        </div>

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Hora do Registo</small>
                            <h6 class="mb-0">
                                {{ $triage->created_at?->format('H:i') ?? 'Não informado' }}
                            </h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Botões --}}
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="d-flex gap-2 justify-content-end">

                <a href="{{ route('triage.index') }}" class="btn btn-outline-secondary">
                    <i class="ri-arrow-left-line me-1"></i>
                    Voltar
                </a>

                <button type="button" class="btn btn-primary" onclick="window.print()">
                    <i class="ri-printer-line me-1"></i>
                    Imprimir Triagem
                </button>

            </div>
        </div>
    </div>

</div>

@endsection
