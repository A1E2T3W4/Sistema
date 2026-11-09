
@extends('layouts.main')

@section('title', 'Horário dos Médicos')

@section('content')

<div class="content">

    {{-- Título e botão de adicionar --}}
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Horário dos Médicos</h4>
        </div>

        <div class="col-sm-8 col-9 text-right m-b-20">
            <a href="{{ url('/schedules/create') }}"
               class="btn btn-primary btn-rounded float-right">
                <i class="fa fa-plus"></i> Adicionar Horário
            </a>
        </div>
    </div>

    {{-- Tabela de horários --}}
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">

                <table class="table table-border table-striped custom-table mb-0">

                    <thead>
                        <tr>
                            <th>Nome do Médico</th>
                            <th>Departamento</th>
                            <th>Dias Disponíveis</th>
                            <th>Horário Disponível</th>
                            <th>Estado</th>
                            <th class="text-right">Acção</th>
                        </tr>
                    </thead>

                    <tbody>

                        {{-- Horário 1 --}}
                        <tr>
                            <td>
                                <img width="28"
                                     height="28"
                                     src="{{ asset('assets/img/user.jpg') }}"
                                     class="rounded-circle m-r-5"
                                     alt="">
                                Henry Daniels
                            </td>

                            <td>Cardiologia</td>

                            <td>Domingo, Segunda-feira, Terça-feira</td>

                            <td>10:00 - 19:00</td>

                            <td>
                                <span class="custom-badge status-green">
                                    Activo
                                </span>
                            </td>

                            <td class="text-right">
                                <div class="dropdown dropdown-action">

                                    <a href="#"
                                       class="action-icon dropdown-toggle"
                                       data-toggle="dropdown"
                                       aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a class="dropdown-item"
                                           href="{{ url('/schedules/edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i>
                                            Editar
                                        </a>

                                        <a class="dropdown-item"
                                           href="#"
                                           data-toggle="modal"
                                           data-target="#delete_schedule">
                                            <i class="fa fa-trash-o m-r-5"></i>
                                            Eliminar
                                        </a>

                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>
        </div>
    </div>

</div>

{{-- Modal de confirmação de eliminação --}}
<div id="delete_schedule"
     class="modal fade delete-modal"
     role="dialog">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body text-center">

                <img src="{{ asset('assets/img/sent.png') }}"
                     alt=""
                     width="50"
                     height="46">

                <h3>Tem a certeza de que deseja eliminar este horário?</h3>

                <div class="m-t-20">

                    <a href="#"
                       class="btn btn-white"
                       data-dismiss="modal">
                        Fechar
                    </a>

                    <button type="button" class="btn btn-danger">
                        Eliminar
                    </button>

                </div>

            </div>

        </div>

    </div>
</div>

@endsection
