    
@extends('layouts.main')

@section('title', 'Alterar Palavra-passe')

@section('sidebar')
    @include('components.settings-sidebar')
@endsection

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <h4 class="page-title">Alterar Palavra-passe</h4>

            <form action="#" method="POST">
                @csrf

                {{-- Palavra-passe actual --}}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Palavra-passe actual</label>
                            <input
                                type="password"
                                name="current_password"
                                class="form-control"
                                placeholder="Introduza a palavra-passe actual"
                                required
                            >
                        </div>
                    </div>
                </div>

                {{-- Nova palavra-passe e confirmação --}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nova palavra-passe</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Nova palavra-passe"
                                required
                            >
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Confirmar palavra-passe</label>
                            <input
                                type="password"
                                name="password_confirmation"
                                class="form-control"
                                placeholder="Confirmar palavra-passe"
                                required
                            >
                        </div>
                    </div>
                </div>

                {{-- Botão --}}
                <div class="row">
                    <div class="col-sm-12 text-center m-t-20">
                        <button
                            type="submit"
                            class="btn btn-primary submit-btn">
                            Actualizar Palavra-passe
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
