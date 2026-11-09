
@extends('layouts.main')

@section('title', 'Adicionar Perfil')

@section('sidebar')
    @include('components.settings-sidebar')
@endsection

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Adicionar Perfil</h4>
        </div>
    </div>

    {{-- Formulário --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form action="#" method="POST">

                @csrf

                {{-- Nome do perfil --}}
                <div class="form-group">
                    <label>
                        Nome do Perfil
                        <span class="text-danger">*</span>
                    </label>

                    <input
                        class="form-control"
                        type="text"
                        name="name"
                        placeholder="Digite o nome do perfil"
                        required
                    >
                </div>

                {{-- Estado --}}
                <div class="form-group">

                    <label class="display-block">Estado</label>

                    <div class="form-check form-check-inline">

                        <input
                            class="form-check-input"
                            type="radio"
                            name="status"
                            id="role_active"
                            value="active"
                            checked
                        >

                        <label class="form-check-label" for="role_active">
                            Activo
                        </label>

                    </div>

                    <div class="form-check form-check-inline">

                        <input
                            class="form-check-input"
                            type="radio"
                            name="status"
                            id="role_inactive"
                            value="inactive"
                        >

                        <label class="form-check-label" for="role_inactive">
                            Inactivo
                        </label>

                    </div>

                </div>

                {{-- Botão --}}
                <div class="m-t-20 text-center">

                    <button type="submit" class="btn btn-primary submit-btn">
                        Criar Perfil
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection
