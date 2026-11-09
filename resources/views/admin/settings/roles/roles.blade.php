
@extends('layouts.main')

@section('title', 'Perfis e Permissões')

@section('sidebar')
    @include('layouts.settings-sidebar')
@endsection

@section('content')

<div class="content">

    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">Perfis e Permissões</h4>
        </div>
    </div>

    <div class="row">

        {{-- Lista de perfis --}}
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-3">

            <a href="{{ route('settings.roles.create-role') }}"" class="btn btn-primary btn-block">
                <i class="fa fa-plus"></i> Adicionar Perfil
            </a>

            <div class="roles-menu">
                <ul>
                    <li class="active">
                        <a href="javascript:void(0);">Superadministrador</a>

                        <span class="role-action">
                            <a href="{{ route('settings.roles.edit') }}">
                                <span class="action-circle large">
                                    <i class="material-icons">edit</i>
                                </span>
                            </a>

                            <a href="#" data-toggle="modal" data-target="#delete_role">
                                <span class="action-circle large delete-btn">
                                    <i class="material-icons">delete</i>
                                </span>
                            </a>
                        </span>
                    </li>

                    <li><a href="#">Administrador</a></li>
                    <li><a href="#">Director Financeiro</a></li>
                    <li><a href="#">Médico</a></li>
                    <li><a href="#">Enfermeiro</a></li>
                    <li><a href="#">Recepcionista</a></li>
                    <li><a href="#">Técnico de Laboratório</a></li>
                    <li><a href="#">Farmacêutico</a></li>
                    <li><a href="#">Profissional de Maternidade</a></li>
                    <li><a href="#">Técnico de Urgência</a></li>
                    <li><a href="#">Técnico de Ambulância</a></li>
                    <li><a href="#">Técnico de Banco de Sangue</a></li>
                    <li><a href="#">Paciente</a></li>
                </ul>
            </div>
        </div>

        {{-- Permissões --}}
        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-9">

            <h6 class="card-title m-b-20">Acesso aos Módulos</h6>

            <div class="m-b-30">
                <ul class="list-group">

                    @foreach([
                        'Funcionários',
                        'Pacientes',
                        'Médicos',
                        'Departamentos',
                        'Consultas',
                        'Triagem',
                        'Prontuários Clínicos',
                        'Laboratório',
                        'Farmácia',
                        'Internamentos',
                        'Urgências',
                        'Maternidade',
                        'Facturação',
                        'Relatórios'
                    ] as $modulo)

                        <li class="list-group-item">
                            {{ $modulo }}

                            <div class="material-switch float-right">
                                <input
                                    id="modulo_{{ $loop->index }}"
                                    type="checkbox"
                                    checked
                                >

                                <label
                                    for="modulo_{{ $loop->index }}"
                                    class="badge-success">
                                </label>
                            </div>
                        </li>

                    @endforeach

                </ul>
            </div>

            {{-- Tabela de permissões --}}
            <div class="table-responsive">

                <table class="table table-striped custom-table">

                    <thead>
                        <tr>
                            <th>Permissões dos Módulos</th>
                            <th class="text-center">Consultar</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Criar</th>
                            <th class="text-center">Eliminar</th>
                            <th class="text-center">Importar</th>
                            <th class="text-center">Exportar</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach([
                            'Funcionários',
                            'Pacientes',
                            'Consultas',
                            'Triagem',
                            'Prontuários Clínicos',
                            'Laboratório',
                            'Farmácia',
                            'Internamentos',
                            'Facturação'
                        ] as $modulo)

                            <tr>
                                <td>{{ $modulo }}</td>

                                @for($i = 0; $i < 6; $i++)
                                    <td class="text-center">
                                        <input type="checkbox" checked>
                                    </td>
                                @endfor
                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>
    </div>
</div>

{{-- Modal de confirmação --}}
<div id="delete_role" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body text-center">

                <img src="{{ asset('assets/img/sent.png') }}"
                     alt=""
                     width="50"
                     height="46">

                <h3>Tem a certeza de que deseja eliminar este perfil?</h3>

                <div class="m-t-20">
                    <a href="#" class="btn btn-white" data-dismiss="modal">
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
