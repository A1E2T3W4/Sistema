
@extends('layouts.main')

@section('title', 'Configurações de E-mail')

@section('sidebar')
    @include('components.settings-sidebar')
@endsection

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form action="#" method="POST">
                @csrf

                {{-- Tipo de envio --}}
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="mailoption"
                            id="phpmail"
                            value="php"
                            checked
                        >
                        <label class="form-check-label" for="phpmail">
                            PHP Mail
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="mailoption"
                            id="smtpmail"
                            value="smtp"
                        >
                        <label class="form-check-label" for="smtpmail">
                            SMTP
                        </label>
                    </div>
                </div>

                {{-- Configurações PHP --}}
                <h4 class="page-title">Configurações de E-mail PHP</h4>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Endereço de E-mail de Origem</label>
                            <input class="form-control" type="email">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nome do Remetente</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                </div>

                {{-- Configurações SMTP --}}
                <h4 class="page-title m-t-30">
                    Configurações de E-mail SMTP
                </h4>

                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Servidor SMTP (HOST)</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Utilizador SMTP</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Palavra-passe SMTP</label>
                            <input class="form-control" type="password">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Porta SMTP</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Segurança SMTP</label>
                            <select class="select form-control">
                                <option value="">Selecionar</option>
                                <option value="none">Nenhuma</option>
                                <option value="ssl">SSL</option>
                                <option value="tls">TLS</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Domínio de Autenticação SMTP</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>

                </div>

                {{-- Botão --}}
                <div class="col-sm-12 m-t-20 text-center">
                    <button type="button" class="btn btn-primary submit-btn">
                        Guardar Alterações
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
