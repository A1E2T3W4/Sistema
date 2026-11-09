
@extends('layouts.main')

@section('title', 'Meu Perfil')

@section('content')

<div class="content">

    {{-- Título e botão --}}
    <div class="row">
        <div class="col-sm-7 col-6">
            <h4 class="page-title">Meu Perfil</h4>
        </div>

        <div class="col-sm-5 col-6 text-right m-b-30">
            <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-rounded">
                <i class="fa fa-pencil"></i> Editar Perfil
            </a>
        </div>
    </div>

    {{-- Cabeçalho do perfil --}}
    <div class="card-box profile-header">
        <div class="row">
            <div class="col-md-12">

                <div class="profile-view">

                    {{-- Fotografia --}}
                    <div class="profile-img-wrap">
                        <div class="profile-img">
                            <a href="#">
                                <img
                                    class="avatar"
                                    src="{{ asset('assets/img/user.jpg') }}"
                                    alt="Fotografia do utilizador">
                            </a>
                        </div>
                    </div>

                    {{-- Informações principais --}}
                    <div class="profile-basic">
                        <div class="row">

                            <div class="col-md-5">
                                <div class="profile-info-left">

                                    <h3 class="user-name m-t-0 mb-0">
                                        {{ auth()->user()->name ?? 'Utilizador' }}
                                    </h3>

                                    <small class="text-muted">
                                        Utilizador do Sistema
                                    </small>

                                    <div class="staff-id">
                                        Perfil de Utilizador
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-7">
                                <ul class="personal-info">

                                    <li>
                                        <span class="title">Telefone:</span>
                                        <span class="text">
                                            {{ auth()->user()->phone ?? 'Não informado' }}
                                        </span>
                                    </li>

                                    <li>
                                        <span class="title">Email:</span>
                                        <span class="text">
                                            {{ auth()->user()->email ?? 'Não informado' }}
                                        </span>
                                    </li>

                                    <li>
                                        <span class="title">Data de nascimento:</span>
                                        <span class="text">Não informado</span>
                                    </li>

                                    <li>
                                        <span class="title">Endereço:</span>
                                        <span class="text">Não informado</span>
                                    </li>

                                    <li>
                                        <span class="title">Género:</span>
                                        <span class="text">Não informado</span>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    {{-- Separadores do perfil --}}
    <div class="profile-tabs">

        <ul class="nav nav-tabs nav-tabs-bottom">

            <li class="nav-item">
                <a class="nav-link active"
                   href="#about-cont"
                   data-toggle="tab">
                    Sobre
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link"
                   href="#profile-cont"
                   data-toggle="tab">
                    Perfil
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link"
                   href="#messages-cont"
                   data-toggle="tab">
                    Mensagens
                </a>
            </li>

        </ul>

        <div class="tab-content">

            {{-- Separador Sobre --}}
            <div class="tab-pane show active" id="about-cont">

                <div class="row">
                    <div class="col-md-12">

                        {{-- Informações profissionais --}}
                        <div class="card-box">
                            <h3 class="card-title">
                                Informações Profissionais
                            </h3>

                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>

                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <span class="name">
                                                    Dados profissionais
                                                </span>

                                                <div>
                                                    As informações profissionais
                                                    do utilizador serão apresentadas aqui.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- Experiência --}}
                        <div class="card-box mb-0">
                            <h3 class="card-title">
                                Experiência Profissional
                            </h3>

                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>

                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <span class="name">
                                                    Histórico profissional
                                                </span>

                                                <div>
                                                    Nenhuma experiência profissional
                                                    registada.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            {{-- Separador Perfil --}}
            <div class="tab-pane" id="profile-cont">

                <div class="card-box">
                    <h3 class="card-title">
                        Dados da Conta
                    </h3>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nome completo</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    value="{{ auth()->user()->name ?? '' }}"
                                    readonly>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    value="{{ auth()->user()->email ?? '' }}"
                                    readonly>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            {{-- Separador Mensagens --}}
            <div class="tab-pane" id="messages-cont">

                <div class="card-box">
                    <h3 class="card-title">Mensagens</h3>

                    <p>
                        As mensagens do utilizador serão apresentadas
                        nesta área.
                    </p>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection
