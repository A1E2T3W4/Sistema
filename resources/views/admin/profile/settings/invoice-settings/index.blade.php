
@extends('layouts.main')

@section('title', 'Configurações de Facturação')

@section('sidebar')
    @include('components.settings-sidebar')
@endsection

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Título --}}
                <h4 class="page-title">Configurações de Facturação</h4>

                {{-- Prefixo da factura --}}
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">
                        Prefixo da Factura
                    </label>

                    <div class="col-lg-9">
                        <input
                            class="form-control"
                            type="text"
                            name="invoice_prefix"
                            value="INV"
                        >
                    </div>
                </div>

                {{-- Logótipo da factura --}}
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">
                        Logótipo da Factura
                    </label>

                    <div class="col-lg-7">
                        <input
                            class="form-control"
                            type="file"
                            name="invoice_logo"
                            accept="image/*"
                        >

                        <span class="form-text text-muted">
                            O tamanho recomendado da imagem é 200px x 40px.
                        </span>
                    </div>

                    <div class="col-lg-2">
                        <div class="img-thumbnail float-right">
                            <img
                                src="{{ asset('assets/img/logo-dark.png') }}"
                                class="img-fluid"
                                alt="Logótipo da instituição"
                                width="100"
                                height="100"
                            >
                        </div>
                    </div>
                </div>

                {{-- Botão --}}
                <div class="col-sm-12 m-t-20 text-center">
                    <button
                        type="button"
                        class="btn btn-primary submit-btn"
                    >
                        Guardar Alterações
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
