
@extends('layouts.main')

@section('title', 'Configurações do Tema')

@section('sidebar')
    @include('layouts.settings-sidebar')
@endsection

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form>
                <h4 class="page-title">Configurações do Tema</h4>

                {{-- Nome do Website --}}
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">
                        Nome do Website
                    </label>

                    <div class="col-lg-9">
                        <input
                            name="website_name"
                            class="form-control"
                            value="SGH"
                            type="text"
                        >
                    </div>
                </div>

                {{-- Logótipo --}}
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">
                        Logótipo
                    </label>

                    <div class="col-lg-7">
                        <input
                            class="form-control"
                            type="file"
                            accept="image/*"
                        >

                        <span class="form-text text-muted">
                            Tamanho recomendado: 40px x 40px
                        </span>
                    </div>

                    <div class="col-lg-2">
                        <div class="img-thumbnail float-right">
                            <img
                                src="{{ asset('assets/img/logo-dark.png') }}"
                                alt="Logótipo"
                                width="40"
                                height="40"
                            >
                        </div>
                    </div>
                </div>

                {{-- Favicon --}}
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">
                        Favicon
                    </label>

                    <div class="col-lg-7">
                        <input
                            class="form-control"
                            type="file"
                            accept="image/x-icon,image/png"
                        >

                        <span class="form-text text-muted">
                            Tamanho recomendado: 16px x 16px
                        </span>
                    </div>

                    <div class="col-lg-2">
                        <div class="settings-image img-thumbnail float-right">
                            <img
                                src="{{ asset('assets/img/favicon.ico') }}"
                                class="img-fluid"
                                width="16"
                                height="16"
                                alt="Favicon"
                            >
                        </div>
                    </div>
                </div>

                {{-- Botão --}}
                <div class="m-t-20 text-center">
                    <button
                        type="button"
                        class="btn btn-primary submit-btn"
                    >
                        Guardar Configurações
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
