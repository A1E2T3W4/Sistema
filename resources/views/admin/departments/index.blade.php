
@extends('layouts.main')

@section('title', 'Departamentos')

@section('content')

<div class="content">

    {{-- Título e botão --}}
    <div class="row">
        <div class="col-sm-5 col-5">
            <h4 class="page-title">Departamentos</h4>
        </div>

        <div class="col-sm-7 col-7 text-right m-b-30">
            <a href="{{ route('departments.create') }}" class="btn btn-primary btn-rounded">
                <i class="fa fa-plus"></i> Adicionar Departamento
            </a>
        </div>
    </div>

    {{-- Tabela de departamentos --}}
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">

                <table class="table table-striped custom-table mb-0 datatable">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome do Departamento</th>
                            <th>Estado</th>
                            <th class="text-right">Acção</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Estomatologia</td>
                            <td>
                                <span class="custom-badge status-green">Activo</span>
                            </td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">

                                    <a href="#" class="action-icon dropdown-toggle"
                                       data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a class="dropdown-item" href="{{ route('departments.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i> Editar
                                        </a>

                                        <a class="dropdown-item" href="#"
                                           data-toggle="modal"
                                           data-target="#delete_department">
                                            <i class="fa fa-trash-o m-r-5"></i> Eliminar
                                        </a>

                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Neurologia</td>
                            <td>
                                <span class="custom-badge status-red">Inactivo</span>
                            </td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">

                                    <a href="#" class="action-icon dropdown-toggle"
                                       data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a class="dropdown-item" href="{{ route('departments.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i> Editar
                                        </a>

                                        <a class="dropdown-item" href="#"
                                           data-toggle="modal"
                                           data-target="#delete_department">
                                            <i class="fa fa-trash-o m-r-5"></i> Eliminar
                                        </a>

                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Oftalmologia</td>
                            <td>
                                <span class="custom-badge status-green">Activo</span>
                            </td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">

                                    <a href="#" class="action-icon dropdown-toggle"
                                       data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a class="dropdown-item" href="{{ route('departments.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i> Editar
                                        </a>

                                        <a class="dropdown-item" href="#"
                                           data-toggle="modal"
                                           data-target="#delete_department">
                                            <i class="fa fa-trash-o m-r-5"></i> Eliminar
                                        </a>

                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Ortopedia</td>
                            <td>
                                <span class="custom-badge status-red">Inactivo</span>
                            </td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">

                                    <a href="#" class="action-icon dropdown-toggle"
                                       data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a class="dropdown-item" href="{{ route('departments.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i> Editar
                                        </a>

                                        <a class="dropdown-item" href="#"
                                           data-toggle="modal"
                                           data-target="#delete_department">
                                            <i class="fa fa-trash-o m-r-5"></i> Eliminar
                                        </a>

                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Oncologia</td>
                            <td>
                                <span class="custom-badge status-green">Activo</span>
                            </td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">

                                    <a href="#" class="action-icon dropdown-toggle"
                                       data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a class="dropdown-item" href="{{ route('departments.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i> Editar
                                        </a>

                                        <a class="dropdown-item" href="#"
                                           data-toggle="modal"
                                           data-target="#delete_department">
                                            <i class="fa fa-trash-o m-r-5"></i> Eliminar
                                        </a>

                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Otorrinolaringologia</td>
                            <td>
                                <span class="custom-badge status-green">Activo</span>
                            </td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">

                                    <a href="#" class="action-icon dropdown-toggle"
                                       data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a class="dropdown-item" href="{{ route('departments.edit') }}">
                                            <i class="fa fa-pencil m-r-5"></i> Editar
                                        </a>

                                        <a class="dropdown-item" href="#"
                                           data-toggle="modal"
                                           data-target="#delete_department">
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

{{-- Modal de confirmação --}}
<div id="delete_department" class="modal fade delete-modal" role="dialog">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body text-center">

                <img src="{{ asset('assets/img/sent.png') }}"
                     alt=""
                     width="50"
                     height="46">

                <h3>Tem a certeza de que pretende eliminar este departamento?</h3>

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
