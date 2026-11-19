
@extends('layouts.main')

@section('title', 'Ver Paciente')
@section('page-title', 'Detalhes do Paciente')

@section('content')

<div class="app-body">

    {{-- Cabeçalho --}}
    <div class="row gx-3 mb-3">
        <div class="col-sm-12">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">

                <div>
                    <h5 class="mb-1">Detalhes do Paciente</h5>
                    <p class="text-muted mb-0">
                        Consulta das informações pessoais e clínicas do paciente.
                    </p>
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('patients.index') }}" class="btn btn-outline-secondary">
                        <i class="ri-arrow-left-line me-1"></i>
                        Voltar
                    </a>

                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-primary">
                        <i class="ri-edit-line me-1"></i>
                        Editar Paciente
                    </a>
                </div>

            </div>
        </div>
    </div>

    {{-- Perfil do Paciente --}}
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-body">

                    <div class="d-flex align-items-center flex-wrap gap-3">

                        <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center"
                             style="width: 75px; height: 75px; font-size: 28px;">
                            <i class="ri-user-line"></i>
                        </div>

                        <div class="flex-grow-1">
                            <h4 class="mb-1">{{ $patient->name }}</h4>

                            <p class="text-muted mb-1">
                                Número do Processo:
                                <strong>{{ $patient->id }}</strong>
                            </p>

                            <span class="badge bg-success-subtle text-success">
                                Paciente registado
                            </span>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Identificação Pessoal --}}
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-user-line me-2 text-primary"></i>
                        Identificação Pessoal
                    </h5>
                </div>

                <div class="card-body">
                    <div class="row gx-3">

                        <div class="col-md-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Nome Completo</small>
                            <h6 class="mb-0">{{ $patient->name ?? 'Não informado' }}</h6>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Número do BI</small>
                            <h6 class="mb-0">{{ $patient->BI ?? 'Não informado' }}</h6>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Data de Nascimento</small>
                            <h6 class="mb-0">
                                {{ $patient->birth_date
                                    ? \Carbon\Carbon::parse($patient->birth_date)->format('d/m/Y')
                                    : 'Não informado' }}
                            </h6>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Sexo</small>
                            <h6 class="mb-0">{{ $patient->gender ?? 'Não informado' }}</h6>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Estado Civil</small>
                            <h6 class="mb-0">{{ $patient->marital_status ?? 'Não informado' }}</h6>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Nacionalidade</small>
                            <h6 class="mb-0">{{ $patient->nationality ?? 'Não informado' }}</h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Contactos --}}
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-contacts-line me-2 text-primary"></i>
                        Contactos
                    </h5>
                </div>

                <div class="card-body">
                    <div class="row gx-3">

                        <div class="col-md-4 col-sm-6 mb-3">
                            <small class="text-muted d-block">Telefone</small>
                            <h6 class="mb-0">{{ $patient->phone ?? 'Não informado' }}</h6>
                        </div>

                       

                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Endereço --}}
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-map-pin-line me-2 text-primary"></i>
                        Endereço e Localização
                    </h5>
                </div>

                <div class="card-body">
                    <div class="row gx-3">

                        <div class="col-sm-12 mb-3">
                            <small class="text-muted d-block">Endereço Completo</small>
                            <h6 class="mb-0">{{ $patient->address ?? 'Não informado' }}</h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Informações Clínicas --}}
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-heart-pulse-line me-2 text-danger"></i>
                        Informações Clínicas
                    </h5>
                </div>

                <div class="card-body">
                    <div class="row gx-3">

                        <div class="col-md-6 mb-3">
                            <small class="text-muted d-block">Grupo Sanguíneo</small>
                            <h6 class="mb-0">{{ $patient->bloodType ?? 'Não informado' }}</h6>
                        </div>

                        <div class="col-md-6 mb-3">
                            <small class="text-muted d-block">Observações</small>
                            <h6 class="mb-0">{{ $patient->observation ?? 'Não informado' }}</h6>
                        </div>

                        

                      

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Informação do Registo --}}
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
                            <small class="text-muted d-block">Data de Registo</small>
                            <h6 class="mb-0">
                                {{ $patient->created_at?->format('d/m/Y') ?? 'Não informado' }}
                            </h6>
                        </div>

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Hora de Registo</small>
                            <h6 class="mb-0">
                                {{ $patient->created_at?->format('H:i') ?? 'Não informado' }}
                            </h6>
                        </div>

                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block">Última Atualização</small>
                            <h6 class="mb-0">
                                {{ $patient->updated_at?->format('d/m/Y H:i') ?? 'Não informado' }}
                            </h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
