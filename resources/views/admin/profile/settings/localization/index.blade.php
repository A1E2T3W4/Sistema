
@extends('layouts.main')

@section('title', 'Localização')

@section('sidebar')
    @include('components.settings-sidebar')
@endsection

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form>
                <h3 class="page-title">Configurações Básicas</h3>

                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>País Padrão</label>
                            <select class="form-control select">
                                <option selected value="Angola">Angola</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Brasil">Brasil</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Formato da Data</label>
                            <select class="form-control select">
                                <option value="d/m/Y" selected>15/05/2026</option>
                                <option value="d.m.Y">15.05.2026</option>
                                <option value="d-m-Y">15-05-2026</option>
                                <option value="m/d/Y">05/15/2026</option>
                                <option value="Y/m/d">2026/05/15</option>
                                <option value="Y-m-d">2026-05-15</option>
                                <option value="d M Y">15 Mai 2026</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Fuso Horário</label>
                            <select class="form-control select">
                                <option value="Africa/Luanda" selected>
                                    (UTC +1:00) África/Luanda
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Idioma Padrão</label>
                            <select class="form-control select">
                                <option value="pt" selected>Português</option>
                                <option value="en">Inglês</option>
                                <option value="fr">Francês</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Código da Moeda</label>
                            <select class="form-control select">
                                <option value="AOA" selected>AOA</option>
                                <option value="USD">USD</option>
                                <option value="EUR">EUR</option>
                                <option value="GBP">GBP</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Símbolo da Moeda</label>
                            <input class="form-control"
                                type="text"
                                value="Kz"
                                readonly>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center m-t-20">
                        <button type="button" class="btn btn-primary submit-btn">
                            Guardar Configurações
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>

@endsection
