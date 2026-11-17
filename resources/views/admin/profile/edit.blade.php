
@extends('layouts.main')

@section('title', 'Editar Perfil')
@section('page-title', 'Editar Perfil')

@section('content')

<div class="app-body">

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Informações Básicas --}}
        <div class="row gx-3">
            <div class="col-12">

                <div class="card mb-3">

                    <div class="card-header">
                        <h5 class="card-title mb-1">
                            <i class="ri-user-line me-2"></i>
                            Informações Básicas
                        </h5>

                        <p class="text-muted mb-0">
                            Actualize os seus dados pessoais e fotografia.
                        </p>
                    </div>

                    <div class="card-body">

                        {{-- Fotografia --}}
                        <div class="d-flex flex-wrap align-items-center gap-3 mb-4">

                            <img
                                src="{{ asset('assets/images/user6.png') }}"
                                alt="Foto do utilizador"
                                width="100"
                                height="100"
                                class="rounded-circle object-fit-cover border"
                            >

                            <div>
                                <label class="form-label">
                                    Fotografia do Perfil
                                </label>

                                <input
                                    type="file"
                                    name="photo"
                                    class="form-control"
                                    accept="image/*"
                                >

                                <small class="text-muted">
                                    Seleccione uma imagem para actualizar a fotografia.
                                </small>
                            </div>

                        </div>

                        <div class="row gx-3">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nome</label>

                                <input
                                    type="text"
                                    name="first_name"
                                    class="form-control"
                                    value="{{ old('first_name') }}"
                                    placeholder="Introduza o seu nome"
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Apelido</label>

                                <input
                                    type="text"
                                    name="last_name"
                                    class="form-control"
                                    value="{{ old('last_name') }}"
                                    placeholder="Introduza o seu apelido"
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Data de Nascimento</label>

                                <input
                                    type="date"
                                    name="birth_date"
                                    class="form-control"
                                    value="{{ old('birth_date') }}"
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Género</label>

                                <select name="gender" class="form-select">
                                    <option value="">Seleccionar género</option>

                                    <option value="Masculino" {{ old('gender') == 'Masculino' ? 'selected' : '' }}>
                                        Masculino
                                    </option>

                                    <option value="Feminino" {{ old('gender') == 'Feminino' ? 'selected' : '' }}>
                                        Feminino
                                    </option>
                                </select>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- Informações de Contacto --}}
        <div class="row gx-3">
            <div class="col-12">

                <div class="card mb-3">

                    <div class="card-header">
                        <h5 class="card-title mb-1">
                            <i class="ri-contacts-line me-2"></i>
                            Informações de Contacto
                        </h5>

                        <p class="text-muted mb-0">
                            Dados para contacto e localização.
                        </p>
                    </div>

                    <div class="card-body">

                        <div class="row gx-3">

                            <div class="col-12 mb-3">
                                <label class="form-label">Endereço</label>

                                <input
                                    type="text"
                                    name="address"
                                    class="form-control"
                                    value="{{ old('address') }}"
                                    placeholder="Introduza o seu endereço"
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Província</label>

                                <input
                                    type="text"
                                    name="province"
                                    class="form-control"
                                    value="{{ old('province') }}"
                                    placeholder="Província"
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">País</label>

                                <input
                                    type="text"
                                    name="country"
                                    class="form-control"
                                    value="{{ old('country', 'Angola') }}"
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    value="{{ old('email', auth()->user()->email ?? '') }}"
                                    placeholder="Endereço de email"
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Número de Telefone</label>

                                <input
                                    type="text"
                                    name="phone"
                                    class="form-control"
                                    value="{{ old('phone', auth()->user()->phone ?? '') }}"
                                    placeholder="Ex: 923 000 000"
                                >
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- Dados de Acesso à Conta --}}
        <div class="row gx-3">
            <div class="col-12">

                <div class="card mb-3">

                    <div class="card-header">
                        <h5 class="card-title mb-1">
                            <i class="ri-shield-user-line me-2"></i>
                            Dados de Acesso à Conta
                        </h5>

                        <p class="text-muted mb-0">
                            Actualize as credenciais utilizadas para entrar no sistema.
                        </p>
                    </div>

                    <div class="card-body">

                        <div class="row gx-3">

                            {{-- Nome de Utilizador --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nome de Utilizador</label>

                                <input
                                    type="text"
                                    name="username"
                                    class="form-control"
                                    value="{{ old('username', auth()->user()->username ?? '') }}"
                                    placeholder="Introduza o nome de utilizador"
                                >
                            </div>

                            {{-- Palavra-passe Actual --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Palavra-passe Actual</label>

                                <input
                                    type="password"
                                    name="current_password"
                                    class="form-control"
                                    placeholder="Introduza a palavra-passe actual"
                                    autocomplete="current-password"
                                >
                            </div>

                            {{-- Nova Palavra-passe --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nova Palavra-passe</label>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Introduza a nova palavra-passe"
                                    autocomplete="new-password"
                                >
                            </div>

                            {{-- Confirmar Palavra-passe --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Confirmar Nova Palavra-passe
                                </label>

                                <input
                                    type="password"
                                    name="password_confirmation"
                                    class="form-control"
                                    placeholder="Confirme a nova palavra-passe"
                                    autocomplete="new-password"
                                >
                            </div>

                        </div>

                        <div class="alert alert-info mb-0">
                            <i class="ri-information-line me-2"></i>

                            Para alterar a palavra-passe, introduza a palavra-passe actual
                            e a nova palavra-passe. Caso não pretenda alterá-la,
                            deixe os campos de palavra-passe vazios.
                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- Informações Académicas --}}
        <div class="row gx-3">
            <div class="col-12">

                <div class="card mb-3">

                    <div class="card-header">
                        <h5 class="card-title mb-1">
                            <i class="ri-graduation-cap-line me-2"></i>
                            Informações Académicas
                        </h5>

                        <p class="text-muted mb-0">
                            Registe a sua formação académica.
                        </p>
                    </div>

                    <div class="card-body">

                        <div class="row gx-3">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Instituição</label>

                                <input
                                    type="text"
                                    name="institution"
                                    class="form-control"
                                    value="{{ old('institution') }}"
                                    placeholder="Nome da instituição"
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Área de Formação</label>

                                <input
                                    type="text"
                                    name="subject"
                                    class="form-control"
                                    value="{{ old('subject') }}"
                                    placeholder="Área de formação"
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Data de Início</label>

                                <input
                                    type="date"
                                    name="start_date"
                                    class="form-control"
                                    value="{{ old('start_date') }}"
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Data de Conclusão</label>

                                <input
                                    type="date"
                                    name="end_date"
                                    class="form-control"
                                    value="{{ old('end_date') }}"
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Grau Académico</label>

                                <input
                                    type="text"
                                    name="degree"
                                    class="form-control"
                                    value="{{ old('degree') }}"
                                    placeholder="Ex: Licenciatura"
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Classificação</label>

                                <input
                                    type="text"
                                    name="grade"
                                    class="form-control"
                                    value="{{ old('grade') }}"
                                    placeholder="Classificação obtida"
                                >
                            </div>

                        </div>

                        <div class="mt-2">
                            <button type="button" class="btn btn-outline-primary">
                                <i class="ri-add-line me-1"></i>
                                Adicionar Outra Instituição
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- Botões --}}
        <div class="d-flex justify-content-end gap-2 mb-4">

            <a href="{{ route('profile.index') }}" class="btn btn-light">
                <i class="ri-close-line me-1"></i>
                Cancelar
            </a>

            <button type="submit" class="btn btn-primary">
                <i class="ri-save-line me-1"></i>
                Guardar Alterações
            </button>

        </div>

    </form>

</div>

@endsection
