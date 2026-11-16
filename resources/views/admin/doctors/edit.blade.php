
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

                    <form>

                        {{-- Dados pessoais --}}
                        <div class="mb-4">
                            <h6 class="mb-3">Dados Pessoais</h6>

                            <div class="row gx-3">

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nome <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="Justin" placeholder="Nome">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Apelido</label>
                                    <input type="text" class="form-control" value="Parker" placeholder="Apelido">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nome de Utilizador <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="justinparker" placeholder="Nome de utilizador">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">E-mail <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" value="justinparker@example.com" placeholder="E-mail">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Palavra-passe</label>
                                    <input type="password" class="form-control" placeholder="Nova palavra-passe">
                                    <small class="text-muted">Deixe vazio para manter a palavra-passe actual.</small>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Confirmar Palavra-passe</label>
                                    <input type="password" class="form-control" placeholder="Confirmar nova palavra-passe">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Data de Nascimento</label>
                                    <input type="date" class="form-control" value="1985-06-15">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Sexo</label>
                                    <select class="form-select">
                                        <option value="masculino" selected>Masculino</option>
                                        <option value="feminino">Feminino</option>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Morada</label>
                                    <input type="text" class="form-control" placeholder="Morada completa">
                                </div>

                                <div class="col-md-3 col-sm-6 mb-3">
                                    <label class="form-label">País</label>
                                    <select class="form-select">
                                        <option value="angola" selected>Angola</option>
                                        <option value="portugal">Portugal</option>
                                        <option value="brasil">Brasil</option>
                                    </select>
                                </div>

                                <div class="col-md-3 col-sm-6 mb-3">
                                    <label class="form-label">Município</label>
                                    <input type="text" class="form-control" placeholder="Município">
                                </div>

                                <div class="col-md-3 col-sm-6 mb-3">
                                    <label class="form-label">Província</label>
                                    <select class="form-select">
                                        <option value="">Seleccione a província</option>
                                        <option>Luanda</option>
                                        <option>Benguela</option>
                                        <option>Huambo</option>
                                        <option>Huíla</option>
                                    </select>
                                </div>

                                <div class="col-md-3 col-sm-6 mb-3">
                                    <label class="form-label">Código Postal</label>
                                    <input type="text" class="form-control" placeholder="Código postal">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Telefone</label>
                                    <input type="tel" class="form-control" placeholder="+244 900 000 000">
                                </div>

                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- Fotografia e biografia --}}
                        <div class="mb-4">
                            <h6 class="mb-3">Perfil e Biografia</h6>

                            <div class="row gx-3">

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Fotografia do Médico</label>

                                    <div class="d-flex align-items-center gap-3">
                                        <img
                                            src="{{ asset('assets/images/user6.png') }}"
                                            alt="Fotografia do médico"
                                            width="75"
                                            height="75"
                                            class="rounded-circle object-fit-cover"
                                        >

                                        <input type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Biografia</label>
                                    <textarea class="form-control" rows="4" placeholder="Escreva uma breve biografia do médico..."></textarea>
                                </div>

                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- Estado --}}
                        <div class="mb-4">
                            <h6 class="mb-3">Estado da Conta</h6>

                            <div class="d-flex flex-wrap gap-4">

                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="status"
                                        id="doctor_active"
                                        value="active"
                                        checked
                                    >
                                    <label class="form-check-label" for="doctor_active">
                                        Activo
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="status"
                                        id="doctor_inactive"
                                        value="inactive"
                                    >
                                    <label class="form-check-label" for="doctor_inactive">
                                        Inactivo
                                    </label>
                                </div>

                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- Botões --}}
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ url()->previous() }}" class="btn btn-light">
                                Cancelar
                            </a>

                            <button type="button" class="btn btn-primary">
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
