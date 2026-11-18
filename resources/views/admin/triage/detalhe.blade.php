
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

                <span class="badge bg-success-subtle text-success fs-6">
                    Concluída
                </span>

            </div>
        </div>
    </div>

    {{-- Identificação do Paciente --}}
    <div class="row gx-3">

        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-user-line me-2 text-primary"></i>
                        Identificação do Paciente
                    </h5>
                </div>

                <div class="card-body">

                    <div class="row gx-3">

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">N.º da Triagem</small>
                            <h6 class="mb-0">TRI-0001</h6>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Nome do Paciente</small>
                            <h6 class="mb-0">Maria José</h6>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Número do Processo</small>
                            <h6 class="mb-0">PAC-001</h6>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Sexo</small>
                            <h6 class="mb-0">Feminino</h6>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Idade</small>
                            <h6 class="mb-0">32 anos</h6>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Data da Triagem</small>
                            <h6 class="mb-0">18/11/2026</h6>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Hora da Triagem</small>
                            <h6 class="mb-0">09:30</h6>
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
                                <h5 class="mb-0">37,2 °C</h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Pressão Arterial</small>
                                <h5 class="mb-0">120/80 mmHg</h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Frequência Cardíaca</small>
                                <h5 class="mb-0">80 bpm</h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Frequência Respiratória</small>
                                <h5 class="mb-0">18 rpm</h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Saturação de Oxigénio</small>
                                <h5 class="mb-0">98%</h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Peso</small>
                                <h5 class="mb-0">65 kg</h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Altura</small>
                                <h5 class="mb-0">165 cm</h5>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-3">
                            <div class="p-3 bg-light rounded">
                                <small class="text-muted d-block">Glicemia</small>
                                <h5 class="mb-0">95 mg/dL</h5>
                            </div>
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

                        <div class="col-sm-12 mb-3">
                            <small class="text-muted d-block">Queixa Principal</small>
                            <p class="mb-0">
                                Paciente apresenta dores de cabeça e tonturas frequentes.
                            </p>
                        </div>

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Duração dos Sintomas</small>
                            <h6 class="mb-0">2 dias</h6>
                        </div>

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Intensidade da Dor</small>
                            <h6 class="mb-0">5/10 - Moderada</h6>
                        </div>

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Alergias Conhecidas</small>
                            <h6 class="mb-0">Nenhuma conhecida</h6>
                        </div>

                        <div class="col-sm-12">
                            <small class="text-muted d-block">Observações da Avaliação</small>
                            <p class="mb-0">
                                Paciente consciente e orientada, sem outras alterações
                                identificadas durante a avaliação inicial.
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
                        Classificação de Risco e Encaminhamento
                    </h5>
                </div>

                <div class="card-body">

                    <div class="row gx-3">

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Classificação de Risco</small>
                            <span class="badge bg-warning-subtle text-warning fs-6">
                                Urgente
                            </span>
                        </div>

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Departamento de Destino</small>
                            <h6 class="mb-0">Medicina Geral</h6>
                        </div>

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Estado da Triagem</small>
                            <span class="badge bg-success-subtle text-success">
                                Concluída
                            </span>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    {{-- Responsável --}}
    <div class="row gx-3">

        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-user-heart-line me-2 text-primary"></i>
                        Responsável pela Triagem
                    </h5>
                </div>

                <div class="card-body">

                    <div class="row gx-3">

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Enfermeiro / Técnico</small>
                            <h6 class="mb-0">Enf. Ana Costa</h6>
                        </div>

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Data do Registo</small>
                            <h6 class="mb-0">18/11/2026</h6>
                        </div>

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Hora do Registo</small>
                            <h6 class="mb-0">09:35</h6>
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

                <a href="#" class="btn btn-outline-secondary">
                    <i class="ri-arrow-left-line me-1"></i>
                    Voltar
                </a>

                <button type="button" class="btn btn-primary"
                    onclick="window.print()">
                    <i class="ri-printer-line me-1"></i>
                    Imprimir Triagem
                </button>

            </div>
        </div>
    </div>

</div>

@endsection
