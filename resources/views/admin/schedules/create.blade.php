
@extends('layouts.main')

@section('title', 'Adicionar Horário')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Adicionar Horário</h4>
        </div>
    </div>

    {{-- Formulário --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form action="#" method="POST">

                @csrf

                <div class="row">

                    {{-- Médico --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome do Médico</label>

                            <select class="select form-control" name="doctor">
                                <option value="">Seleccione o Médico</option>
                                <option value="1">Henry Daniels</option>
                                <option value="2">Doctor Name 2</option>
                            </select>
                        </div>
                    </div>

                    {{-- Dias disponíveis --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Dias Disponíveis</label>

                            <select class="select form-control"
                                    name="available_days[]"
                                    multiple>

                                <option value="domingo">Domingo</option>
                                <option value="segunda">Segunda-feira</option>
                                <option value="terca">Terça-feira</option>
                                <option value="quarta">Quarta-feira</option>
                                <option value="quinta">Quinta-feira</option>
                                <option value="sexta">Sexta-feira</option>
                                <option value="sabado">Sábado</option>

                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    {{-- Hora de início --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Hora de Início</label>

                            <div class="time-icon">
                                <input type="text"
                                       class="form-control"
                                       name="start_time"
                                       id="datetimepicker3"
                                       placeholder="Seleccione a hora">
                            </div>
                        </div>
                    </div>

                    {{-- Hora de fim --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Hora de Fim</label>

                            <div class="time-icon">
                                <input type="text"
                                       class="form-control"
                                       name="end_time"
                                       id="datetimepicker4"
                                       placeholder="Seleccione a hora">
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Mensagem --}}
                <div class="form-group">
                    <label>Observações</label>

                    <textarea cols="30"
                              rows="4"
                              class="form-control"
                              name="message"
                              placeholder="Escreva alguma observação sobre o horário..."></textarea>
                </div>

                {{-- Estado --}}
                <div class="form-group">

                    <label class="display-block">Estado do Horário</label>

                    <div class="form-check form-check-inline">

                        <input class="form-check-input"
                               type="radio"
                               name="status"
                               id="schedule_active"
                               value="activo"
                               checked>

                        <label class="form-check-label"
                               for="schedule_active">
                            Activo
                        </label>

                    </div>

                    <div class="form-check form-check-inline">

                        <input class="form-check-input"
                               type="radio"
                               name="status"
                               id="schedule_inactive"
                               value="inactivo">

                        <label class="form-check-label"
                               for="schedule_inactive">
                            Inactivo
                        </label>

                    </div>

                </div>

                {{-- Botão --}}
                <div class="m-t-20 text-center">

                    <a href="{{ url('/schedules') }}"
                       class="btn btn-secondary">
                        Cancelar
                    </a>

                    <button type="submit"
                            class="btn btn-primary submit-btn">
                        Criar Horário
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection
