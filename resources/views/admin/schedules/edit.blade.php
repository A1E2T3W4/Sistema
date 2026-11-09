
@extends('layouts.main')

@section('title', 'Editar Horário')

@section('content')

<div class="content">

    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Editar Horário</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form>

                {{-- Médico e dias disponíveis --}}
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome do Médico</label>

                            <select class="select">
                                <option>Selecionar</option>
                                <option selected>Cristina Groves</option>
                                <option>Marie Wells</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Dias Disponíveis</label>

                            <select class="select" multiple>
                                <option>Selecionar Dias</option>
                                <option selected>Domingo</option>
                                <option selected>Segunda-feira</option>
                                <option>Terça-feira</option>
                                <option>Quarta-feira</option>
                                <option>Quinta-feira</option>
                                <option>Sexta-feira</option>
                                <option>Sábado</option>
                            </select>
                        </div>
                    </div>

                </div>

                {{-- Horários --}}
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Hora de Início</label>

                            <div class="time-icon">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="datetimepicker3"
                                    value="08:00 AM"
                                >
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Hora de Término</label>

                            <div class="time-icon">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="datetimepicker4"
                                    value="05:00 PM"
                                >
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Mensagem --}}
                <div class="form-group">
                    <label>Mensagem</label>

                    <textarea
                        cols="30"
                        rows="4"
                        class="form-control"
                    >Horário de atendimento do médico.</textarea>
                </div>

                {{-- Estado do horário --}}
                <div class="form-group">

                    <label class="display-block">Estado do Horário</label>

                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="status"
                            id="product_active"
                            value="active"
                            checked
                        >

                        <label class="form-check-label" for="product_active">
                            Ativo
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="status"
                            id="product_inactive"
                            value="inactive"
                        >

                        <label class="form-check-label" for="product_inactive">
                            Inativo
                        </label>
                    </div>

                </div>

                {{-- Botões --}}
                <div class="m-t-20 text-center">

                    <a href="{{ route('schedules.index') }}"
                       class="btn btn-secondary submit-btn">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-primary submit-btn">
                        Guardar Alterações
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection
