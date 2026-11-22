
@extends('layouts.main')

@section('title', 'Adicionar Médico')

@section('page-title', 'Adicionar Médico')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <div class="custom-tabs-container">

                        {{-- Navegação dos separadores --}}
                        <ul class="nav nav-tabs" id="doctorTabs" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active"
                                    id="personal-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#personal"
                                    type="button"
                                    role="tab">
                                    <i class="ri-briefcase-4-line me-1"></i>
                                    Dados Pessoais
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link"
                                    id="profile-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#profile"
                                    type="button"
                                    role="tab">
                                    <i class="ri-account-pin-circle-line me-1"></i>
                                    Perfil e Biografia
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link"
                                    id="availability-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#availability"
                                    type="button"
                                    role="tab">
                                    <i class="ri-calendar-check-line me-1"></i>
                                    Disponibilidade
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link"
                                    id="account-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#account"
                                    type="button"
                                    role="tab">
                                    <i class="ri-lock-password-line me-1"></i>
                                    Dados da Conta
                                </button>
                            </li>

                        </ul>

                        {{-- Conteúdo dos separadores --}}
                        <div class="tab-content pt-4">

                            {{-- DADOS PESSOAIS --}}
                            <div class="tab-pane fade show active"
                                id="personal"
                                role="tabpanel">

                                <div class="row gx-3">

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nome</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="ri-user-line"></i>
                                                </span>
                                                <input type="text" class="form-control"
                                                    placeholder="Introduza o nome">
                                            </div>
                                        </div>
                                    </div>

                                   

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Data de Nascimento</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="ri-calendar-line"></i>
                                                </span>
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Sexo</label>
                                            <select class="form-select">
                                                <option value="">Seleccionar sexo</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Identificação</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="ri-secure-payment-line"></i>
                                                </span>
                                                <input type="text" class="form-control"
                                                    placeholder="Número do BI">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">E-mail</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="ri-mail-line"></i>
                                                </span>
                                                <input type="email" class="form-control"
                                                    placeholder="exemplo@email.com">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Telefone</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="ri-phone-line"></i>
                                                </span>
                                                <input type="text" class="form-control"
                                                    placeholder="+244 900 000 000">
                                            </div>
                                        </div>
                                    </div>

                                   

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Qualificação Académica</label>
                                            <select class="form-select">
                                                <option value="">Seleccionar</option>
                                                <option>Licenciatura</option>
                                                <option>Mestrado</option>
                                                <option>Doutoramento</option>
                                                <option>Especialização</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Especialidade Médica</label>
                                            <select class="form-select">
                                                <option value="">Seleccionar especialidade</option>
                                                <option>Clínica Geral</option>
                                                <option>Cardiologia</option>
                                                <option>Pediatria</option>
                                                <option>Cirurgia Geral</option>
                                                <option>Ginecologia</option>
                                                <option>Ortopedia</option>
                                                <option>Neurologia</option>
                                                <option>Dermatologia</option>
                                                <option>Oftalmologia</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Cargo</label>
                                            <select class="form-select">
                                                <option value="">Seleccionar cargo</option>
                                                <option>Médico</option>
                                                <option>Chefe de Departamento</option>
                                                <option>Director Clínico</option>
                                            </select>
                                        </div>
                                    </div>

                                   

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Morada</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="ri-map-pin-line"></i>
                                                </span>
                                                <input type="text" class="form-control"
                                                    placeholder="Introduza a morada completa">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">País</label>
                                            <select class="form-select">
                                                <option value="">Seleccionar país</option>
                                                <option selected>Angola</option>
                                                <option>Portugal</option>
                                                <option>Brasil</option>
                                                <option>Moçambique</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Província</label>
                                            <select class="form-select">
                                                <option value="">Seleccionar província</option>
                                                <option>Luanda</option>
                                                <option>Benguela</option>
                                                <option>Huambo</option>
                                                <option>Huíla</option>
                                                <option>Bié</option>
                                                <option>Cabinda</option>
                                                <option>Cuanza Norte</option>
                                                <option>Cuanza Sul</option>
                                                <option>Malanje</option>
                                                <option>Namibe</option>
                                                <option>Uíge</option>
                                                <option>Zaire</option>
                                                <option>Lunda Norte</option>
                                                <option>Lunda Sul</option>
                                                <option>Moxico</option>
                                                <option>Cunene</option>
                                                <option>Cuando</option>
                                                <option>Cubango</option>
                                                <option>Icolo e Bengo</option>
                                                <option>Moxico Leste</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Município</label>
                                            <input type="text" class="form-control"
                                                placeholder="Introduza o município">
                                        </div>
                                    </div>

                                   

                                </div>
                            </div>

                            {{-- PERFIL E BIOGRAFIA --}}
                            <div class="tab-pane fade" id="profile" role="tabpanel">

                                <div class="row gx-3">

                                    <div class="col-lg-3 col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Fotografia do Médico</label>

                                            <div class="border rounded-3 p-3 text-center">
                                                <img src="{{ asset('assets/images/user6.png') }}"
                                                    class="img-fluid rounded-circle mb-3"
                                                    style="width: 110px; height: 110px; object-fit: cover;"
                                                    alt="Fotografia do médico">

                                                <input type="file" class="form-control"
                                                    accept="image/*">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-9 col-md-8">
                                        <div class="mb-3">
                                            <label class="form-label">Biografia Profissional</label>
                                            <textarea class="form-control" rows="7"
                                                placeholder="Descreva a experiência profissional, formação e competências do médico..."></textarea>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            {{-- DISPONIBILIDADE --}}
                            <div class="tab-pane fade" id="availability" role="tabpanel">

                                <div class="alert alert-info">
                                    <i class="ri-information-line me-1"></i>
                                    Defina os horários em que o médico estará disponível para consultas.
                                </div>

                                <div class="row gx-3">

                                    @foreach([
                                        'Segunda-feira',
                                        'Terça-feira',
                                        'Quarta-feira',
                                        'Quinta-feira',
                                        'Sexta-feira',
                                        'Sábado',
                                        'Domingo'
                                    ] as $dia)

                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">{{ $dia }}</label>

                                            <div class="input-group">
                                                <input type="time" class="form-control">
                                                <span class="input-group-text">até</span>
                                                <input type="time" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach

                                </div>

                            </div>

                            {{-- DADOS DA CONTA --}}
                            <div class="tab-pane fade" id="account" role="tabpanel">

                                <div class="row gx-3">

                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nome de Utilizador</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="ri-user-settings-line"></i>
                                                </span>
                                                <input type="text" class="form-control"
                                                    placeholder="Criar nome de utilizador">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Palavra-passe</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="ri-lock-password-line"></i>
                                                </span>
                                                <input type="password" class="form-control"
                                                    placeholder="Introduza a palavra-passe">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Confirmar Palavra-passe</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="ri-lock-password-line"></i>
                                                </span>
                                                <input type="password" class="form-control"
                                                    placeholder="Confirme a palavra-passe">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    {{-- ACÇÕES --}}
                    <div class="d-flex gap-2 justify-content-end mt-4">

                        <button type="button" class="btn btn-primary">
                            <i class="ri-user-add-line me-1"></i>
                            Criar Perfil do Médico
                        </button>

                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
