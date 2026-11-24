@extends('layouts.main')

@section('title', 'Lista de Médicos')
@section('page-title', 'Lista de Médicos')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-sm-12">

            <div class="card">

                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title">Lista de Médicos</h5>

                    <a href="{{ route('doctors.create') }}" class="btn btn-primary ms-auto">
                        <i class="ri-add-line me-1"></i>
                        Adicionar Médico
                    </a>
                </div>

                <div class="card-body">

                    {{-- Mensagem de sucesso --}}
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    <div class="table-responsive">

                        <table class="table truncate m-0 align-middle">

                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Especialidade</th>
                                    <th>Qualificação</th>
                                    <th>E-mail</th>
                                    <th class="text-center">Acções</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($doctors as $doctor)

                                <tr>
                                    {{-- Nome --}}
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/user.png') }}"
                                                class="img-shadow img-2x rounded-5 me-2"
                                                alt="Foto do médico">

                                            {{ $doctor->name }}
                                        </div>
                                    </td>

                                    {{-- Especialidade --}}
                                    <td>
                                        {{ $doctor->specialty ?? 'Não informada' }}
                                    </td>

                                    {{-- Qualificação --}}
                                    <td>
                                        {{ $doctor->qualification ?? 'Não informada' }}
                                    </td>

                                    {{-- E-mail --}}
                                    <td>
                                        {{ $doctor->email ?? 'Não informado' }}
                                    </td>

                                    {{-- Acções --}}
                                    <td>
                                        <div class="d-inline-flex gap-1">

                                            {{-- Eliminar --}}
                                            <button type="button"
                                                class="btn btn-outline-danger btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteDoctor{{ $doctor->id }}"
                                                title="Eliminar">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>

                                            
                                            <a href="{{ route('doctors.edit', ['id' => $doctor->id]) }}"
                                                class="btn btn-outline-success btn-sm"
                                                title="Editar">
                                                <i class="ri-edit-box-line"></i>
                                            </a>

                                            {{-- Ver perfil --}}
                                            <a href="#"
                                                class="btn btn-outline-info btn-sm"
                                                title="Ver perfil">
                                                <i class="ri-eye-line"></i>
                                            </a>

                                        </div>
                                    </td>
                                </tr>

                                @empty

                                <tr>
                                    <td colspan="5" class="text-center py-4">
                                        <i class="ri-user-search-line fs-2 d-block mb-2 text-muted"></i>
                                        Nenhum médico cadastrado.
                                    </td>
                                </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                    {{-- Paginação --}}
                    <div class="mt-3">
                        {{ $doctors->links() }}
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

{{-- MODAIS DE ELIMINAÇÃO --}}
@foreach ($doctors as $doctor)

<div class="modal fade" id="deleteDoctor{{ $doctor->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Eliminar Médico</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                Tem a certeza de que deseja eliminar o médico
                <strong>{{ $doctor->name }}</strong>?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                    Cancelar
                </button>

                <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        Sim, eliminar
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

@endforeach

@endsection