
@extends('layouts.main')

@section('title', 'Impostos')

@section('content')

<div class="content">

    {{-- Título e botão --}}
    <div class="row">
        <div class="col-sm-8 col-6">
            <h4 class="page-title">Impostos</h4>
        </div>

        <div class="col-sm-4 col-6 text-right m-b-30">
            <a href="{{ route('taxes.create') }}"
               class="btn btn-primary btn-rounded">
                <i class="fa fa-plus"></i> Adicionar Imposto
            </a>
        </div>
    </div>

    {{-- Tabela --}}
    <div class="row">
        <div class="col-md-12">

            <div class="table-responsive">

                <table class="table table-striped custom-table mb-0">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome do Imposto</th>
                            <th>Percentagem (%)</th>
                            <th>Estado</th>
                            <th class="text-right">Acção</th>
                        </tr>
                    </thead>

                    <tbody>

                        {{-- Imposto 1 --}}
                        <tr>
                            <td>1</td>
                            <td>IVA</td>
                            <td>14%</td>

                            <td>
                                <div class="dropdown action-label">

                                    <a class="custom-badge status-red dropdown-toggle"
                                       href="#"
                                       data-toggle="dropdown"
                                       aria-expanded="false">
                                        Inactivo
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Activo</a>
                                        <a class="dropdown-item" href="#">Inactivo</a>
                                    </div>

                                </div>
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
                                           href="{{ route('taxes.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i>
                                            Editar
                                        </a>

                                        <a class="dropdown-item"
                                           href="#"
                                           data-toggle="modal"
                                           data-target="#delete_tax">
                                            <i class="fa fa-trash-o m-r-5"></i>
                                            Eliminar
                                        </a>

                                    </div>
                                </div>

                            </td>
                        </tr>

                        {{-- Imposto 2 --}}
                        <tr>
                            <td>2</td>
                            <td>GST</td>
                            <td>30%</td>

                            <td>
                                <div class="dropdown action-label">

                                    <a class="custom-badge status-green dropdown-toggle"
                                       href="#"
                                       data-toggle="dropdown"
                                       aria-expanded="false">
                                        Activo
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Activo</a>
                                        <a class="dropdown-item" href="#">Inactivo</a>
                                    </div>

                                </div>
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
                                           href="{{ route('taxes.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i>
                                            Editar
                                        </a>

                                        <a class="dropdown-item"
                                           href="#"
                                           data-toggle="modal"
                                           data-target="#delete_tax">
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

{{-- Modal de eliminação --}}
<div id="delete_tax" class="modal fade delete-modal" role="dialog">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body text-center">

                <img src="{{ asset('assets/img/sent.png') }}"
                     alt=""
                     width="50"
                     height="46">

                <h3>Tem a certeza de que pretende eliminar este imposto?</h3>

                <div class="m-t-20">

                    <a href="#"
                       class="btn btn-white"
                       data-dismiss="modal">
                        Fechar
                    </a>

                    <button type="submit" class="btn btn-danger">
                        Eliminar
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
