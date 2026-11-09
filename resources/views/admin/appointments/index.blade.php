
@extends('layouts.main')

@section('title', 'Consultas')

@section('content')

<div class="content">

    {{-- Título e botão de adicionar --}}
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Consultas</h4>
        </div>

        <div class="col-sm-8 col-9 text-right m-b-20">
            <a href="{{ route('appointments.create') }}"
               class="btn btn-primary btn-rounded float-right">
                <i class="fa fa-plus"></i> Adicionar Consulta
            </a>
        </div>
    </div>

    {{-- Tabela de consultas --}}
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">

                <table class="table table-striped custom-table">

                    <thead>
                        <tr>
                            <th>ID da Consulta</th>
                            <th>Nome do Paciente</th>
                            <th>Idade</th>
                            <th>Nome do Médico</th>
                            <th>Departamento</th>
                            <th>Data</th>
                            <th>Horário</th>
                            <th>Estado</th>
                            <th class="text-right">Acção</th>
                        </tr>
                    </thead>

                    <tbody>

                        {{-- Consulta 1 --}}
                        <tr>
                            <td>APT0001</td>

                            <td>
                                <img width="28" height="28"
                                     src="{{ asset('assets/img/user.jpg') }}"
                                     class="rounded-circle m-r-5"
                                     alt="">
                                Denise Stevens
                            </td>

                            <td>35</td>
                            <td>Henry Daniels</td>
                            <td>Cardiologia</td>
                            <td>30 Dez 2018</td>
                            <td>10:00 - 11:00</td>

                            <td>
                                <span class="custom-badge status-red">
                                    Inactivo
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
                                           href="{{ route('appointments.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i>
                                            Editar
                                        </a>

                                        <a class="dropdown-item"
                                           href="#"
                                           data-toggle="modal"
                                           data-target="#delete_appointment">
                                            <i class="fa fa-trash-o m-r-5"></i>
                                            Eliminar
                                        </a>

                                    </div>
                                </div>
                            </td>
                        </tr>

                        {{-- Consulta 2 --}}
                        <tr>
                            <td>APT0002</td>

                            <td>
                                <img width="28" height="28"
                                     src="{{ asset('assets/img/user.jpg') }}"
                                     class="rounded-circle m-r-5"
                                     alt="">
                                Denise Stevens
                            </td>

                            <td>35</td>
                            <td>Henry Daniels</td>
                            <td>Cardiologia</td>
                            <td>30 Dez 2018</td>
                            <td>10:00 - 11:00</td>

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
                                           href="{{ route('appointments.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i>
                                            Editar
                                        </a>

                                        <a class="dropdown-item"
                                           href="#"
                                           data-toggle="modal"
                                           data-target="#delete_appointment">
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
<div id="delete_appointment"
     class="modal fade delete-modal"
     role="dialog">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body text-center">

                <img src="{{ asset('assets/img/sent.png') }}"
                     alt=""
                     width="50"
                     height="46">

                <h3>Tem a certeza de que deseja eliminar esta consulta?</h3>

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
