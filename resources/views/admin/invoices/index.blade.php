
@extends('layouts.main')

@section('title', 'Facturas')

@section('content')

<div class="content">

    {{-- Título e botão --}}
    <div class="row">
        <div class="col-sm-5 col-4">
            <h4 class="page-title">Facturas</h4>
        </div>

        <div class="col-sm-7 col-8 text-right m-b-30">
            <a href="{{ route('invoices.create') }}" class="btn btn-primary btn-rounded">
                <i class="fa fa-plus"></i> Criar Nova Factura
            </a>
        </div>
    </div>

    {{-- Filtros --}}
    <div class="row filter-row">

        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <label class="focus-label">De</label>
                <div class="cal-icon">
                    <input class="form-control floating datetimepicker" type="text">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <label class="focus-label">Até</label>
                <div class="cal-icon">
                    <input class="form-control floating datetimepicker" type="text">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus select-focus">
                <label class="focus-label">Estado</label>
                <select class="select floating">
                    <option>Selecionar Estado</option>
                    <option>Pendente</option>
                    <option>Paga</option>
                    <option>Parcialmente Paga</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <a href="#" class="btn btn-success btn-block">Pesquisar</a>
        </div>

    </div>

    {{-- Tabela de facturas --}}
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">

                <table class="table table-striped custom-table mb-0">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Número da Factura</th>
                            <th>Paciente</th>
                            <th>Data de Emissão</th>
                            <th>Data de Vencimento</th>
                            <th>Valor</th>
                            <th>Estado</th>
                            <th class="text-right">Acções</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>
                                <a href="{{ route('invoices.show') }}">#FAT-0001</a>
                            </td>
                            <td>Charles Ortega</td>
                            <td>01 Ago 2018</td>
                            <td>07 Ago 2018</td>
                            <td>20.000 Kz</td>
                            <td>
                                <span class="custom-badge status-green">Paga</span>
                            </td>

                            <td class="text-right">
                                <div class="dropdown dropdown-action">

                                    <a href="#" class="action-icon dropdown-toggle"
                                       data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a class="dropdown-item" href="{{ route('invoices.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i> Editar
                                        </a>

                                        <a class="dropdown-item" href="{{ route('invoices.show') }}">
                                            <i class="fa fa-eye m-r-5"></i> Visualizar
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-file-pdf-o m-r-5"></i> Descarregar PDF
                                        </a>

                                        <a class="dropdown-item" href="#"
                                           data-toggle="modal" data-target="#delete_invoice">
                                            <i class="fa fa-trash-o m-r-5"></i> Eliminar
                                        </a>

                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>
                                <a href="{{ route('invoices.show') }}">#FAT-0002</a>
                            </td>
                            <td>Denise Stevens</td>
                            <td>24 Ago 2018</td>
                            <td>24 Ago 2018</td>
                            <td>6.000 Kz</td>
                            <td>
                                <span class="custom-badge status-blue">Enviada</span>
                            </td>

                            <td class="text-right">
                                <div class="dropdown dropdown-action">

                                    <a href="#" class="action-icon dropdown-toggle"
                                       data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a class="dropdown-item" href="{{ route('invoices.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i> Editar
                                        </a>

                                        <a class="dropdown-item" href="{{ route('invoices.show') }}">
                                            <i class="fa fa-eye m-r-5"></i> Visualizar
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-file-pdf-o m-r-5"></i> Descarregar PDF
                                        </a>

                                        <a class="dropdown-item" href="#"
                                           data-toggle="modal" data-target="#delete_invoice">
                                            <i class="fa fa-trash-o m-r-5"></i> Eliminar
                                        </a>

                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>
                                <a href="{{ route('invoices.show') }}">#FAT-0003</a>
                            </td>
                            <td>Dennis Salazar</td>
                            <td>01 Set 2018</td>
                            <td>07 Set 2018</td>
                            <td>20.000 Kz</td>
                            <td>
                                <span class="custom-badge status-orange">Parcialmente Paga</span>
                            </td>

                            <td class="text-right">
                                <div class="dropdown dropdown-action">

                                    <a href="#" class="action-icon dropdown-toggle"
                                       data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a class="dropdown-item" href="{{ route('invoices.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i> Editar
                                        </a>

                                        <a class="dropdown-item" href="{{ route('invoices.show') }}">
                                            <i class="fa fa-eye m-r-5"></i> Visualizar
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-file-pdf-o m-r-5"></i> Descarregar PDF
                                        </a>

                                        <a class="dropdown-item" href="#"
                                           data-toggle="modal" data-target="#delete_invoice">
                                            <i class="fa fa-trash-o m-r-5"></i> Eliminar
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
<div id="delete_invoice" class="modal fade delete-modal" role="dialog">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body text-center">

                <img src="{{ asset('assets/img/sent.png') }}"
                     alt="" width="50" height="46">

                <h3>Tem a certeza de que pretende eliminar esta factura?</h3>

                <div class="m-t-20">

                    <a href="#" class="btn btn-white" data-dismiss="modal">
                        Cancelar
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
