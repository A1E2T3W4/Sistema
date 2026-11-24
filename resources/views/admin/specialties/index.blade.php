@extends('layouts.main')

@section('title', 'Especialidades')

@section('content')



{{-- Lista de especialidades --}}
<div class="card" style="margin: 20px;">
    <div class="card-header bg-white" >
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div>
                <h5 class="mb-1">Especialidades</h5>
                <span class="text-muted mt-2 mt-md-0">
                    Total: <strong>{{ $specialties->total() }}</strong>
                </span>
            </div>
            <div class="col-md-5 text-md-right mt-3 mt-md-0">
                <a href="{{ route('specialties.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus mr-1"></i>
                    Nova Especialidade
                </a>
            </div>


        </div>
    </div>

    <div class="card-body p-0">

        <div class="table-responsive">
            <table class="table table-hover mb-0">

                <thead class="thead-light">
                    <tr>
                        <th style="width: 75px;">N.º</th>
                        <th>Nome da Especialidade</th>
                        <th>Descrição</th>
                        <th class="text-center" style="width: 130px;">Acções</th>
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
                                <strong>{{ $specialty->name }}</strong>
                            </div>
                        </td>

                        <td class="align-middle text-muted">
                            {{ $specialty->description ?: 'Sem descrição' }}
                        </td>

                        <td class="align-middle text-center">

                            <a href="{{ route('specialties.edit', $specialty->id) }}"
                                class="btn btn-sm btn-light text-primary"
                                title="Editar">
                                <i class="ri-edit-line"></i>
                            </a>
                            

                            <button type="button"
                                class="btn btn-sm btn-light text-danger"
                                title="Eliminar"
                                data-toggle="modal"
                                data-target="#delete_specialty_{{ $specialty->id }}">
                                <i class="ri-delete-bin-line"></i>
                            </button>

                        </td>
                    </tr>

                    @empty <i class="ri-delete-bin-line"></i>

                    <tr>
                        <td colspan="4" class="text-center py-5">
                            <i class="fa fa-stethoscope fa-3x text-muted mb-3"></i>

                            <h5>Nenhuma especialidade encontrada</h5>

                            <p class="text-muted mb-3">
                                Ainda não existem especialidades registadas no sistema.
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

    </div>

    {{-- Paginação --}}
    @if($specialties->hasPages())
    <div class="card-footer bg-white">
        <div class="d-flex justify-content-between align-items-center flex-wrap">

            <small class="text-muted mb-2">
                A mostrar {{ $specialties->firstItem() }}
                a {{ $specialties->lastItem() }}
                de {{ $specialties->total() }} especialidades
            </small>

            {{ $specialties->links() }}

        </div>
    </div>
    @endif

</div>

{{-- Modais de confirmação --}}
@foreach($specialties as $specialty)

<div class="modal fade"
    id="delete_specialty_{{ $specialty->id }}"
    tabindex="-1"
    role="dialog"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">

            <div class="modal-body text-center p-4">

                <div class="mb-3">
                    <i class="fa fa-exclamation-triangle fa-3x text-danger"></i>
                </div>

                <h5>Eliminar Especialidade?</h5>

                <p class="text-muted">
                    Tem a certeza de que pretende eliminar
                    a especialidade
                    <strong>{{ $specialty->name }}</strong>?
                </p>

                <div class="mt-4">

                    <form action="{{ route('specialties.destroy', $specialty->id) }}"
                        method="POST"
                        class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash mr-1"></i>
                            Sim, eliminar
                        </button>


                    </form>

                </div>

            </div>

        </div>

    </div>
</div>

@endforeach

</div>

@endsection