
@extends('layouts.main')

@section('title', 'Especialidades')

@section('content')

<div class="content">

    {{-- CABEÇALHO --}}
    <div class="row align-items-center mb-4">
        <div class="col-md-7">
            <h4 class="page-title mb-1">Especialidades</h4>
            <p class="text-muted mb-0">
                Gestão das especialidades disponíveis na instituição.
            </p>
        </div>

        <div class="col-md-5 text-md-right mt-3 mt-md-0">
            <a href="{{ route('specialties.create') }}"
               class="btn btn-primary btn-rounded">
                <i class="fa fa-plus mr-1"></i>
                Adicionar Especialidade
            </a>
        </div>
    </div>

    {{-- MENSAGEM DE SUCESSO --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="fa fa-check-circle mr-2"></i>
            {{ session('success') }}

            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
        </div>
    @endif

    {{-- MENSAGENS DE ERRO --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Não foi possível concluir a operação.</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- RESUMO --}}
    <div class="row mb-4">
        <div class="col-xl-4 col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center">
                    <div class="mr-3 d-flex align-items-center justify-content-center"
                         style="width:55px;height:55px;background:#eef2ff;border-radius:12px;">
                        <i class="fa fa-stethoscope fa-2x"
                           style="color:#536dfe;"></i>
                    </div>

                    <div>
                        <h3 class="mb-0 font-weight-bold">
                            {{ $specialties->total() }}
                        </h3>
                        <span class="text-muted">Total de Especialidades</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- TABELA --}}
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white d-flex align-items-center justify-content-between">
            <div>
                <h5 class="mb-1">Lista de Especialidades</h5>
                <small class="text-muted">
                    Especialidades registadas no sistema
                </small>
            </div>

            <span class="badge badge-light p-2">
                {{ $specialties->total() }} registo(s)
            </span>
        </div>

        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-hover mb-0">

                    <thead>
                        <tr style="background:#f8f9fa;">
                            <th style="width:65px;">#</th>
                            <th>Especialidade</th>
                            <th>Descrição</th>
                            <th>Estado</th>
                            <th class="text-right">Acções</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($specialties as $specialty)

                            <tr>
                                <td class="align-middle text-muted">
                                    {{ $specialties->firstItem() + $loop->index }}
                                </td>

                                <td class="align-middle">
                                    <div class="d-flex align-items-center">
                                        <div class="mr-3 d-flex align-items-center justify-content-center"
                                             style="width:38px;height:38px;background:#f0f3ff;border-radius:10px;">
                                            <i class="fa fa-stethoscope"
                                               style="color:#536dfe;"></i>
                                        </div>

                                        <strong>{{ $specialty->name }}</strong>
                                    </div>
                                </td>

                                <td class="align-middle text-muted">
                                    {{ $specialty->description ?: 'Sem descrição' }}
                                </td>

                                <td class="align-middle">
                                    @if($specialty->status === 'active')
                                        <span class="badge badge-success px-3 py-2">
                                            <i class="fa fa-check-circle mr-1"></i>
                                            Activa
                                        </span>
                                    @else
                                        <span class="badge badge-secondary px-3 py-2">
                                            <i class="fa fa-ban mr-1"></i>
                                            Inactiva
                                        </span>
                                    @endif
                                </td>

                                <td class="align-middle text-right">
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle"
                                                type="button"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-right">

                                            <a class="dropdown-item"
                                               href="{{ route('specialties.edit', $specialty->id) }}">
                                                <i class="fa fa-pencil mr-2 text-primary"></i>
                                                Editar
                                            </a>

                                            <a class="dropdown-item text-danger"
                                               href="#"
                                               data-toggle="modal"
                                               data-target="#delete_specialty_{{ $specialty->id }}">
                                                <i class="fa fa-trash mr-2"></i>
                                                Eliminar
                                            </a>

                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- MODAL DE ELIMINAÇÃO --}}
                            <div class="modal fade"
                                 id="delete_specialty_{{ $specialty->id }}"
                                 tabindex="-1"
                                 role="dialog"
                                 aria-hidden="true">

                                <div class="modal-dialog modal-dialog-centered"
                                     role="document">

                                    <div class="modal-content border-0 shadow">

                                        <div class="modal-body text-center p-4">

                                            <div class="mb-3 mx-auto d-flex align-items-center justify-content-center"
                                                 style="width:65px;height:65px;background:#fff0f0;border-radius:50%;">
                                                <i class="fa fa-trash fa-2x text-danger"></i>
                                            </div>

                                            <h5 class="font-weight-bold">
                                                Eliminar Especialidade?
                                            </h5>

                                            <p class="text-muted">
                                                Tem a certeza de que pretende eliminar
                                                a especialidade
                                                <strong>{{ $specialty->name }}</strong>?
                                                Esta acção não poderá ser desfeita.
                                            </p>

                                            <div class="mt-4">

                                                <button type="button"
                                                        class="btn btn-light mr-2"
                                                        data-dismiss="modal">
                                                    Cancelar
                                                </button>

                                                <form action="{{ route('specialties.destroy', $specialty->id) }}"
                                                      method="POST"
                                                      class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="btn btn-danger">
                                                        <i class="fa fa-trash mr-1"></i>
                                                        Sim, eliminar
                                                    </button>
                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        @empty

                            <tr>
                                <td colspan="5" class="text-center py-5">

                                    <div class="mb-3">
                                        <i class="fa fa-stethoscope fa-3x text-muted"></i>
                                    </div>

                                    <h5>Nenhuma especialidade encontrada</h5>

                                    <p class="text-muted">
                                        Ainda não existem especialidades registadas.
                                    </p>

                                    <a href="{{ route('specialties.create') }}"
                                       class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus mr-1"></i>
                                        Adicionar Especialidade
                                    </a>

                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            {{-- PAGINAÇÃO --}}
            @if($specialties->hasPages())
                <div class="d-flex justify-content-between align-items-center mt-4 flex-wrap">
                    <small class="text-muted mb-2">
                        A mostrar {{ $specialties->firstItem() }}
                        a {{ $specialties->lastItem() }}
                        de {{ $specialties->total() }} especialidades
                    </small>

                    <div>
                        {{ $specialties->links() }}
                    </div>
                </div>
            @endif

        </div>
    </div>

</div>

@endsection
