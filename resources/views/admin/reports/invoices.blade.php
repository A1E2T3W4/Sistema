
@extends('layouts.main')

@section('title', 'Relatório de Facturas')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Relatório de Facturas</h4>
        </div>
    </div>

    {{-- Filtros --}}
    <div class="row filter-row">

        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus select-focus">
                <label class="focus-label">Paciente</label>

                <select class="select floating">
                    <option value="">Seleccionar paciente</option>
                    <option>Jennifer Robinson</option>
                    <option>Terry Baker</option>
                </select>
            </div>
        </div>

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
            <a href="#" class="btn btn-success btn-block">
                Pesquisar
            </a>
        </div>

    </div>

    {{-- Tabela de facturas --}}
    <div class="row">
        <div class="col-md-12">

            <div class="table-responsive">

                <table class="table table-striped custom-table mb-0 datatable">

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
                                <a href="{{ route('invoices.show') }}">
                                    #FAT-0001
                                </a>
                            </td>

                            <td>Global Technologies</td>

                            <td>01 Set 2017</td>

                            <td>07 Set 2017</td>

                            <td>2.099.000 Kz</td>

                            <td>
                                <span class="custom-badge status-green">
                                    Paga
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
                                           href="{{ route('invoices.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i>
                                            Editar
                                        </a>

                                        <a class="dropdown-item"
                                           href="{{ route('invoices.show') }}">
                                            <i class="fa fa-eye m-r-5"></i>
                                            Visualizar
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-file-pdf-o m-r-5"></i>
                                            Descarregar
                                        </a>

                                        <a class="dropdown-item" href="#">
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

@endsection
