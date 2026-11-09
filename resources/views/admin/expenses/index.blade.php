@extends('layouts.main')

@section('title', 'Despesas')

@section('content')

<div class="content">

    {{-- Título e botão --}}
    <div class="row">
        <div class="col-sm-8 col-5">
            <h4 class="page-title">Despesas</h4>
        </div>

        <div class="col-sm-4 col-7 text-right m-b-30">
            <a href="{{ route('expenses.create') }}" class="btn btn-primary btn-rounded float-right">
                <i class="fa fa-plus"></i> Adicionar Despesa
            </a>
        </div>
    </div>

    {{-- Filtros --}}
    <div class="row filter-row">

        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
            <div class="form-group form-focus">
                <label class="focus-label">Nome do Item</label>
                <input type="text" class="form-control floating">
            </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
            <div class="form-group form-focus select-focus">
                <label class="focus-label">Comprado Por</label>
                <select class="select floating">
                    <option>-- Seleccionar --</option>
                    <option>Loren Gatlin</option>
                    <option>Tarah Shropshire</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
            <div class="form-group form-focus select-focus">
                <label class="focus-label">Pago Por</label>
                <select class="select floating">
                    <option>-- Seleccionar --</option>
                    <option>Dinheiro</option>
                    <option>Cheque</option>
                    <option>Transferência Bancária</option>
                    <option>Multicaixa</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
            <div class="form-group form-focus">
                <label class="focus-label">De</label>
                <div class="cal-icon">
                    <input class="form-control floating datetimepicker" type="text">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
            <div class="form-group form-focus">
                <label class="focus-label">Até</label>
                <div class="cal-icon">
                    <input class="form-control floating datetimepicker" type="text">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
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
                            <th>Comprado Por</th>
                            <th>Valor</th>
                            <th>Pago Por</th>
                            <th class="text-center">Estado</th>
                            <th class="text-right">Acções</th>
                        </tr>
                    </thead>

                    <tbody>

                        {{-- Despesa 1 --}}
                        <tr>
                            <td><strong>Maca Hospitalar</strong></td>
                            <td>Hospital Equipment Inc</td>
                            <td>17/08/2026</td>
                            <td>Loren Gatlin</td>
                            <td>4.824.000 Kz</td>
                            <td>Dinheiro</td>

                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="custom-badge status-red dropdown-toggle"
                                       href="#" data-toggle="dropdown">
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
                                    <a href="#" class="action-icon dropdown-toggle"
                                       data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('expenses.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i> Editar
                                        </a>

                                        <a class="dropdown-item" href="#"
                                           data-toggle="modal" data-target="#delete_expense">
                                            <i class="fa fa-trash-o m-r-5"></i> Eliminar
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        {{-- Despesa 2 --}}
                        <tr>
                            <td><strong>Máquina de Anestesia</strong></td>
                            <td>Biomedical Equipment Inc</td>
                            <td>22/06/2026</td>
                            <td>Tarah Shropshire</td>
                            <td>37.488.000 Kz</td>
                            <td>Cheque</td>

                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="custom-badge status-green dropdown-toggle"
                                       href="#" data-toggle="dropdown">
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
                                    <a href="#" class="action-icon dropdown-toggle"
                                       data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('expenses.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i> Editar
                                        </a>

                                        <a class="dropdown-item" href="#"
                                           data-toggle="modal" data-target="#delete_expense">
                                            <i class="fa fa-trash-o m-r-5"></i> Eliminar
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        {{-- Despesa 3 --}}
                        <tr>
                            <td><strong>Bomba de Aspiração</strong></td>
                            <td>Medi Pro Service</td>
                            <td>24/07/2026</td>
                            <td>Tarah Shropshire</td>
                            <td>1.950.000 Kz</td>
                            <td>Cheque</td>

                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="custom-badge status-green dropdown-toggle"
                                       href="#" data-toggle="dropdown">
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
                                    <a href="#" class="action-icon dropdown-toggle"
                                       data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('expenses.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i> Editar
                                        </a>

                                        <a class="dropdown-item" href="#"
                                           data-toggle="modal" data-target="#delete_expense">
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
<div id="delete_expense" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body text-center">

                <img src="{{ asset('assets/img/sent.png') }}"
                     alt="" width="50" height="46">

                <h3>Tem a certeza de que pretende eliminar esta despesa?</h3>

                <div class="m-t-20">
                    <a href="#" class="btn btn-white" data-dismiss="modal">
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