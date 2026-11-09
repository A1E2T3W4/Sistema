
@extends('layouts.main')

@section('title', 'Configurações de Notificações')

@section('sidebar')
    @include('layouts.settings-sidebar')
@endsection

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <h4 class="page-title">
                Configurações de Notificações
            </h4>

            <div>
                <ul class="list-group notification-list">

                    {{-- Funcionários --}}
                    <li class="list-group-item">
                        Funcionários

                        <div class="material-switch float-right">
                            <input
                                id="staff_module"
                                name="staff_module"
                                type="checkbox"
                                checked
                            >
                            <label
                                for="staff_module"
                                class="badge-primary">
                            </label>
                        </div>
                    </li>

                    {{-- Feriados --}}
                    <li class="list-group-item">
                        Feriados

                        <div class="material-switch float-right">
                            <input
                                id="holidays_module"
                                name="holidays_module"
                                type="checkbox"
                            >
                            <label
                                for="holidays_module"
                                class="badge-primary">
                            </label>
                        </div>
                    </li>

                    {{-- Pedidos de ausência --}}
                    <li class="list-group-item">
                        Pedidos de Ausência

                        <div class="material-switch float-right">
                            <input
                                id="leave_module"
                                name="leave_module"
                                type="checkbox"
                            >
                            <label
                                for="leave_module"
                                class="badge-primary">
                            </label>
                        </div>
                    </li>

                    {{-- Eventos --}}
                    <li class="list-group-item">
                        Eventos

                        <div class="material-switch float-right">
                            <input
                                id="events_module"
                                name="events_module"
                                type="checkbox"
                            >
                            <label
                                for="events_module"
                                class="badge-primary">
                            </label>
                        </div>
                    </li>

                    {{-- Conversas --}}
                    <li class="list-group-item">
                        Conversas

                        <div class="material-switch float-right">
                            <input
                                id="chat_module"
                                name="chat_module"
                                type="checkbox"
                            >
                            <label
                                for="chat_module"
                                class="badge-primary">
                            </label>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</div>

@endsection
