
@extends('layouts.main')

@section('title', 'Lista de Pacientes')
@section('page-title', 'Lista de Pacientes')

@section('content')

<div class="row gx-3">
    <div class="col-sm-12">

        <div class="card">

            {{-- Cabeçalho --}}
            <div class="card-header d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">

                <h5 class="card-title mb-0">
                    Lista de Pacientes
                </h5>

                <a href="{{ route('patients.create') }}" class="btn btn-primary">
                    <i class="ri-add-line me-1"></i>
                    Adicionar Paciente
                </a>

            </div>

            <div class="card-body">

                {{-- Mensagem de sucesso --}}
                @if(session('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">

                        {{ session('success') }}

                        <button type="button" class="btn-close"
                            data-bs-dismiss="alert" aria-label="Fechar">
                        </button>

                    </div>

                @endif

                {{-- Barra de pesquisa --}}
                <div class="row mb-4">

                    <div class="col-md-6 col-lg-5">

                        <form action="{{ route('patients.index') }}" method="GET">

                             <input
                                    type="text"
                                    id="search"
                                    name="search"
                                    class="form-control"
                                    placeholder="Pesquisar paciente..."
                                    value="{{ $search ?? '' }}"
                                >

                        </form>

                    </div>

                </div>

                {{-- Tabela --}}
                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Endereço</th>
                                <th>Telefone</th>
                                <th class="text-end">Acções</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($patients as $patient)

                                <tr>

                                    {{-- Nome --}}
                                    <td>
                                        <span class="fw-medium">
                                            {{ $patient->name }}
                                        </span>
                                    </td>

                                    {{-- Idade --}}
                                    <td>
                                        @if($patient->birthDate)
                                            {{ \Carbon\Carbon::parse($patient->birthDate)->age }} anos
                                        @else
                                            <span class="text-muted">Não informado</span>
                                        @endif
                                    </td>

                                    {{-- Endereço --}}
                                    <td>
                                        {{ $patient->address ?? 'Não informado' }}
                                    </td>

                                    {{-- Telefone --}}
                                    <td>
                                        {{ $patient->phone ?? 'Não informado' }}
                                    </td>

                                    {{-- Acções --}}
                                    <td class="text-end">

                                        <div class="d-inline-flex gap-1">

                                            {{-- Editar --}}
                                            <a href="{{ route('patients.edit', $patient->id) }}"
                                                class="btn btn-outline-success btn-sm"
                                                title="Editar paciente">

                                                <i class="ri-edit-box-line"></i>

                                            </a>

                                            {{-- Eliminar --}}
                                            <form
                                                action="{{ route('patients.destroy', $patient->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Tem a certeza de que deseja eliminar este paciente?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    class="btn btn-outline-danger btn-sm"
                                                    title="Eliminar paciente">

                                                    <i class="ri-delete-bin-line"></i>

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="5" class="text-center py-5">

                                        <i class="ri-user-search-line fs-1 text-muted"></i>

                                        <p class="text-muted mb-0 mt-2">

                                            @if(!empty($search))
                                                Nenhum paciente encontrado para "{{ $search }}".
                                            @else
                                                Nenhum paciente registado.
                                            @endif

                                        </p>

                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

                {{-- Rodapé e paginação --}}
                @if($patients->total() > 0)

                    <div class="d-flex flex-column flex-md-row
                                align-items-center justify-content-between
                                gap-3 mt-3 pt-3 border-top">

                        {{-- Informação dos registos --}}
                        <div class="text-muted small">

                            A mostrar

                            <strong>{{ $patients->firstItem() }}</strong>

                            a

                            <strong>{{ $patients->lastItem() }}</strong>

                            de

                            <strong>{{ $patients->total() }}</strong>

                            pacientes

                        </div>

                        {{-- Navegação --}}
                        <div>
                            {{ $patients->links('pagination::bootstrap-5') }}
                        </div>

                    </div>

                @endif

            </div>

        </div>

    </div>
</div>

@endsection
