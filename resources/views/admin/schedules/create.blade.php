
@extends('layouts.main')

@section('title', 'Adicionar Horário')

@section('page-title', 'Adicionar Horário')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-12">

            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-calendar-schedule-line me-2"></i>
                        Informações do Horário
                    </h5>
                </div>

                <div class="card-body">

                    <form action="#" method="POST">
                        @csrf

                        <div class="row gx-3">

                            {{-- Médico --}}
                            <div class="col-md-6 mb-3">
                                <label for="doctor" class="form-label">
                                    Nome do Médico
                                </label>

                                <select name="doctor"
                                        id="doctor"
                                        class="form-select">

                                    <option value="">Seleccione o Médico</option>
                                    <option value="1">Henry Daniels</option>
                                    <option value="2">Doctor Name 2</option>

                                </select>
                            </div>

                            {{-- Dias disponíveis --}}
                            <div class="col-md-6 mb-3">
                                <label for="available_days" class="form-label">
                                    Dias Disponíveis
                                </label>

                                <select name="available_days[]"
                                        id="available_days"
                                        class="form-select"
                                        multiple
                                        size="4">

                                    <option value="domingo">Domingo</option>
                                    <option value="segunda">Segunda-feira</option>
                                    <option value="terca">Terça-feira</option>
                                    <option value="quarta">Quarta-feira</option>
                                    <option value="quinta">Quinta-feira</option>
                                    <option value="sexta">Sexta-feira</option>
                                    <option value="sabado">Sábado</option>

                                </select>

                                <small class="text-muted">
                                    Pode seleccionar vários dias.
                                </small>
                            </div>

                            {{-- Hora de início --}}
                            <div class="col-md-6 mb-3">
                                <label for="start_time" class="form-label">
                                    Hora de Início
                                </label>

                                <input type="time"
                                       name="start_time"
                                       id="start_time"
                                       class="form-control">
                            </div>

                            {{-- Hora de fim --}}
                            <div class="col-md-6 mb-3">
                                <label for="end_time" class="form-label">
                                    Hora de Fim
                                </label>

                                <input type="time"
                                       name="end_time"
                                       id="end_time"
                                       class="form-control">
                            </div>

                            {{-- Observações --}}
                            <div class="col-12 mb-3">
                                <label for="message" class="form-label">
                                    Observações
                                </label>

                                <textarea name="message"
                                          id="message"
                                          rows="4"
                                          class="form-control"
                                          placeholder="Escreva alguma observação sobre o horário..."></textarea>
                            </div>

                            {{-- Estado --}}
                            <div class="col-12 mb-4">

                                <label class="form-label d-block">
                                    Estado do Horário
                                </label>

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

                        </div>

                        {{-- Botões --}}
                        <div class="d-flex justify-content-end gap-2 border-top pt-3">

                            <a href="{{ url('/schedules') }}"
                               class="btn btn-outline-secondary">
                                <i class="ri-close-line me-1"></i>
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-primary">
                                <i class="ri-save-line me-1"></i>
                                Criar Horário
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
