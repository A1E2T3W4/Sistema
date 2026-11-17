
@extends('layouts.main')

@section('title', 'Meu Perfil')
@section('page-title', 'Meu Perfil')

@section('content')

<div class="app-body">

    {{-- Cabeçalho do perfil --}}
    <div class="row gx-3">

        <div class="col-12">

            <div class="card mb-3">

                <div class="card-body">

                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">

                        <div>
                            <h5 class="card-title mb-1">Meu Perfil</h5>
                            <p class="text-muted mb-0">
                                Consulte as suas informações pessoais e profissionais.
                            </p>
                        </div>

                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">
                            <i class="ri-edit-line me-1"></i>
                            Editar Perfil
                        </a>

                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-4">

                        {{-- Fotografia --}}
                        <div>
                            <img
                                src="{{ asset('assets/images/user6.png') }}"
                                alt="Fotografia do utilizador"
                                width="110"
                                height="110"
                                class="rounded-circle object-fit-cover border"
                            >
                        </div>

                        {{-- Informações principais --}}
                        <div class="flex-grow-1">

                            <h4 class="mb-1">
                                {{ auth()->user()->name ?? 'Utilizador' }}
                            </h4>

                            <p class="text-muted mb-2">
                                <i class="ri-user-line me-1"></i>
                                Utilizador do Sistema
                            </p>

                            <span class="badge bg-primary-subtle text-primary">
                                Perfil de Utilizador
                            </span>

                        </div>

                    </div>

                    <hr class="my-4">

                    {{-- Informações pessoais --}}
                    <div class="row gx-3">

                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <i class="ri-phone-line fs-4 text-primary"></i>
                                <div>
                                    <small class="text-muted">Telefone</small>
                                    <h6 class="mb-0">
                                        {{ auth()->user()->phone ?? 'Não informado' }}
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <i class="ri-mail-line fs-4 text-primary"></i>
                                <div>
                                    <small class="text-muted">E-mail</small>
                                    <h6 class="mb-0">
                                        {{ auth()->user()->email ?? 'Não informado' }}
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <i class="ri-calendar-line fs-4 text-primary"></i>
                                <div>
                                    <small class="text-muted">Data de Nascimento</small>
                                    <h6 class="mb-0">Não informado</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <i class="ri-map-pin-line fs-4 text-primary"></i>
                                <div>
                                    <small class="text-muted">Endereço</small>
                                    <h6 class="mb-0">Não informado</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <i class="ri-user-3-line fs-4 text-primary"></i>
                                <div>
                                    <small class="text-muted">Género</small>
                                    <h6 class="mb-0">Não informado</h6>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- Separadores --}}
    <div class="row gx-3">

        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <ul class="nav nav-tabs mb-4" id="profileTabs" role="tablist">

                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link active"
                                id="about-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#about-cont"
                                type="button"
                                role="tab">
                                <i class="ri-information-line me-1"></i>
                                Sobre
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="profile-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#profile-cont"
                                type="button"
                                role="tab">
                                <i class="ri-user-settings-line me-1"></i>
                                Perfil
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="messages-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#messages-cont"
                                type="button"
                                role="tab">
                                <i class="ri-message-2-line me-1"></i>
                                Mensagens
                            </button>
                        </li>

                    </ul>

                    <div class="tab-content">

                        {{-- Sobre --}}
                        <div
                            class="tab-pane fade show active"
                            id="about-cont"
                            role="tabpanel"
                            aria-labelledby="about-tab">

                            <div class="card mb-3">

                                <div class="card-header">
                                    <h5 class="card-title mb-0">
                                        Informações Profissionais
                                    </h5>
                                </div>

                                <div class="card-body">

                                    <div class="d-flex align-items-start gap-3">

                                        <div class="avatar avatar-md bg-primary-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-briefcase-line fs-4 text-primary"></i>
                                        </div>

                                        <div>
                                            <h6 class="mb-1">Dados Profissionais</h6>
                                            <p class="text-muted mb-0">
                                                As informações profissionais
                                                do utilizador serão apresentadas aqui.
                                            </p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            {{-- Experiência --}}
                            <div class="card mb-0">

                                <div class="card-header">
                                    <h5 class="card-title mb-0">
                                        Experiência Profissional
                                    </h5>
                                </div>

                                <div class="card-body">

                                    <div class="d-flex align-items-start gap-3">

                                        <div class="avatar avatar-md bg-primary-subtle rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-history-line fs-4 text-primary"></i>
                                        </div>

                                        <div>
                                            <h6 class="mb-1">Histórico Profissional</h6>
                                            <p class="text-muted mb-0">
                                                Nenhuma experiência profissional registada.
                                            </p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        {{-- Perfil --}}
                        <div
                            class="tab-pane fade"
                            id="profile-cont"
                            role="tabpanel"
                            aria-labelledby="profile-tab">

                            <div class="card mb-0">

                                <div class="card-header">
                                    <h5 class="card-title mb-0">Dados da Conta</h5>
                                </div>

                                <div class="card-body">

                                    <div class="row gx-3">

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Nome Completo</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="{{ auth()->user()->name ?? '' }}"
                                                readonly>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">E-mail</label>
                                            <input
                                                type="email"
                                                class="form-control"
                                                value="{{ auth()->user()->email ?? '' }}"
                                                readonly>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Telefone</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="{{ auth()->user()->phone ?? '' }}"
                                                readonly>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        {{-- Mensagens --}}
                        <div
                            class="tab-pane fade"
                            id="messages-cont"
                            role="tabpanel"
                            aria-labelledby="messages-tab">

                            <div class="card mb-0">

                                <div class="card-header">
                                    <h5 class="card-title mb-0">Mensagens</h5>
                                </div>

                                <div class="card-body">

                                    <div class="text-center py-4">

                                        <i class="ri-message-3-line fs-1 text-muted"></i>

                                        <h6 class="mt-3">Nenhuma mensagem</h6>

                                        <p class="text-muted mb-0">
                                            As mensagens do utilizador serão apresentadas nesta área.
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
