@extends('layouts.main')

@section('title', 'Lista de Pacientes')

@section('page-title', 'Lista de Pacientes')

@section('content')

<div class="row gx-3">
    <div class="col-sm-12">

        <div class="card">

            {{-- Cabeçalho da tabela --}}
            <div class="card-header d-flex align-items-center justify-content-between">

                <h5 class="card-title mb-0">Lista de Pacientes</h5>

                <a href="{{ route('patients.create') }}" class="btn btn-primary ms-auto">
                    <i class="ri-add-line"></i>
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

                {{-- Tabela de pacientes --}}
                <div class="table-responsive">

                    <table class="table truncate m-0 align-middle">

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
                                    <div class="d-flex align-items-center">
                                        <span>{{ $patient->name }}</span>
                                    </div>
                                </td>

                                {{-- Idade calculada com Carbon --}}
                                {{-- Idade --}}
                                <td>
                                    @if($patient->birthDate)
                                    {{ \Carbon\Carbon::parse($patient->birthDate)->age }} anos
                                    @else
                                    Não informado
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
                                <td colspan="5" class="text-center py-4">
                                    Nenhum paciente registado.
                                </td>
                            </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

                {{-- Paginação --}}
                <div class="mt-3">
                    {{ $patients->links() }}
                </div>

            </div>

        </div>

    </div>
</div>

@endsection