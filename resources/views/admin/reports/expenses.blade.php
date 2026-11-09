
@extends('layouts.main')

@section('title', 'Relatório de Despesas')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Relatório de Despesas</h4>
        </div>
    </div>

    {{-- Filtros --}}
    <div class="row filter-row">

        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus select-focus">
                <label class="focus-label">Comprado por</label>
                <select class="select floating">
                    <option value="">Seleccionar funcionário</option>
                    <option>Loren Gatlin</option>
                    <option>Tarah Shropshire</option>
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

    {{-- Tabela de despesas --}}
    <div class="row">
        <div class="col-md-12">

            <div class="table-responsive">

                <table class="table table-striped custom-table mb-0 datatable">

                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Fornecedor</th>
                            <th>Data da Compra</th>
                            <th>Comprado por</th>
                            <th>Valor</th>
                            <th>Forma de Pagamento</th>
                            <th class="text-center">Estado</th>
                            <th class="text-right">Acções</th>
                        </tr>
                    </thead>

                    <tbody>

                        {{-- Despesa 1 --}}
                        <tr>
                            <td>
                                <strong>Máquina de Anestesia</strong>
                            </td>

                            <td>Biomedical Equipment Inc</td>

                            <td>22 Jun 2018</td>

                            <td>Tarah Shropshire</td>

                            <td>37.488.000 Kz</td>

                            <td>Cheque</td>

                            <td class="text-center">
                                <div class="dropdown action-label">

                                    <a class="custom-badge status-green dropdown-toggle"
                                       href="#"
                                       data-toggle="dropdown"
                                       aria-expanded="false">
                                        Aprovada
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Pendente</a>
                                        <a class="dropdown-item" href="#">Aprovada</a>
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

                                        <a class="dropdown-item" href="{{ route('expenses.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i>
                                            Editar
                                        </a>

                                        <a class="dropdown-item"
                                           href="#"
                                           data-toggle="modal"
                                           data-target="#delete_approve">
                                            <i class="fa fa-trash-o m-r-5"></i>
                                            Eliminar
                                        </a>

                                    </div>
                                </div>
                            </td>
                        </tr>

                        {{-- Despesa 2 --}}
                        <tr>
                            <td>
                                <strong>Maca Hospitalar</strong>
                            </td>

                            <td>Hospital Equipment Inc</td>

                            <td>17 Ago 2018</td>

                            <td>Loren Gatlin</td>

                            <td>4.824.000 Kz</td>

                            <td>Dinheiro</td>

                            <td class="text-center">
                                <div class="dropdown action-label">

                                    <a class="custom-badge status-red dropdown-toggle"
                                       href="#"
                                       data-toggle="dropdown"
                                       aria-expanded="false">
                                        Pendente
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Pendente</a>
                                        <a class="dropdown-item" href="#">Aprovada</a>
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

                                        <a class="dropdown-item" href="{{ route('expenses.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i>
                                            Editar
                                        </a>

                                        <a class="dropdown-item"
                                           href="#"
                                           data-toggle="modal"
                                           data-target="#delete_approve">
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
