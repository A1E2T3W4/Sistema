
@extends('layouts.main')

@section('title', 'Editar Médico')
@section('page-title', 'Editar Médico')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-12">

            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">Editar Dados do Médico</h5>
                    <p class="text-muted mb-0 mt-1">
                        Actualize as informações pessoais e profissionais do médico.
                    </p>
                </div>

                <div class="card-body">

                    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- Dados pessoais --}}
                        <div class="mb-4">
                            <h6 class="mb-3">Dados Pessoais</h6>

                            <div class="row gx-3">

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nome</label>
                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        value="{{ old('name', $doctor->name) }}"
                                        placeholder="Nome completo">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Data de Nascimento</label>
                                    <input
                                        type="date"
                                        name="birthDate"
                                        class="form-control"
                                        value="{{ old('birthDate', $doctor->birthDate) }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Género</label>
                                    <select name="gender" class="form-select">
                                        <option value="">Seleccione o género</option>
                                        <option value="Masculino" {{ old('gender', $doctor->gender) == 'Masculino' ? 'selected' : '' }}>
                                            Masculino
                                        </option>
                                        <option value="Feminino" {{ old('gender', $doctor->gender) == 'Feminino' ? 'selected' : '' }}>
                                            Feminino
                                        </option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Identificação / BI</label>
                                    <input
                                        type="text"
                                        name="BI"
                                        class="form-control"
                                        value="{{ old('BI', $doctor->BI) }}"
                                        placeholder="Número do BI">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">E-mail</label>
                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        value="{{ old('email', $doctor->email) }}"
                                        placeholder="E-mail">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Telefone</label>
                                    <input
                                        type="tel"
                                        name="phone"
                                        class="form-control"
                                        value="{{ old('phone', $doctor->phone) }}"
                                        placeholder="+244 900 000 000">
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Morada</label>
                                    <input
                                        type="text"
                                        name="address"
                                        class="form-control"
                                        value="{{ old('address', $doctor->address) }}"
                                        placeholder="Morada completa">
                                </div>

                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- Dados profissionais --}}
                        <div class="mb-4">
                            <h6 class="mb-3">Dados Profissionais</h6>

                            <div class="row gx-3">

                                {{-- Qualificação Académica --}}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Qualificação Académica</label>

                                    <select name="qualification" class="form-select">
                                        <option value="">Seleccione a qualificação</option>

                                        @foreach ([
                                            'Técnico Médio',
                                            'Licenciatura',
                                            'Pós-graduação',
                                            'Mestrado',
                                            'Doutoramento'
                                        ] as $qualification)

                                            <option value="{{ $qualification }}"
                                                {{ old('qualification', $doctor->qualification) == $qualification ? 'selected' : '' }}>
                                                {{ $qualification }}
                                            </option>

                                        @endforeach
                                    </select>
                                </div>

                                {{-- Especialidade Médica --}}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Especialidade Médica</label>

                                    <select name="specialty" class="form-select">
                                        <option value="">Seleccione a especialidade</option>

                                        @foreach ([
                                            'Clínica Geral',
                                            'Cardiologia',
                                            'Pediatria',
                                            'Cirurgia Geral',
                                            'Ginecologia',
                                            'Ortopedia',
                                            'Neurologia',
                                            'Dermatologia',
                                            'Oftalmologia'
                                        ] as $specialty)

                                            <option value="{{ $specialty }}"
                                                {{ old('specialty', $doctor->specialty) == $specialty ? 'selected' : '' }}>
                                                {{ $specialty }}
                                            </option>

                                        @endforeach
                                    </select>
                                </div>

                                {{-- Cargo --}}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Cargo</label>

                                    <select name="position" class="form-select">
                                        <option value="">Seleccione o cargo</option>

                                        @foreach ([
                                            'Médico',
                                            'Médico Interno',
                                            'Médico Especialista',
                                            'Chefe de Serviço',
                                            'Director Clínico'
                                        ] as $position)

                                            <option value="{{ $position }}"
                                                {{ old('position', $doctor->position) == $position ? 'selected' : '' }}>
                                                {{ $position }}
                                            </option>

                                        @endforeach
                                    </select>
                                </div>

                                {{-- Biografia --}}
                                <div class="col-12 mb-3">
                                    <label class="form-label">Biografia Profissional</label>

                                    <textarea
                                        name="biography"
                                        class="form-control"
                                        rows="4"
                                        placeholder="Escreva uma breve biografia do médico...">{{ old('biography', $doctor->biography) }}</textarea>
                                </div>

                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- Botões --}}
                        <div class="d-flex justify-content-end gap-2">

                            <button type="submit" class="btn btn-primary">
                                <i class="ri-save-line me-1"></i>
                                Guardar Alterações
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
