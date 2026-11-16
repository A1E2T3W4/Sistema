
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
                                <th>Email</th>
                                <th class="text-end">Acções</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($patients as $patient)

                                <tr>

                                    {{-- Nome e fotografia --}}
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <img
                                                src="{{ $patient->foto
                                                    ? asset('storage/'.$patient->foto)
                                                    : asset('assets/img/user.jpg') }}"
                                                class="img-shadow img-2x rounded-5 me-2"
                                                alt="Foto do paciente">

                                            <span>{{ $patient->name }}</span>

                                        </div>
                                    </td>

                                    {{-- Idade --}}
                                    <td>
                                        {{ $patient->birth_date
                                            ? \Carbon\Carbon::parse($patient->birth_date)->age
                                            : 'Não informado' }}
                                    </td>

                                    {{-- Endereço --}}
                                    <td>
                                        {{ $patient->address ?? 'Não informado' }}
                                    </td>

                                    {{-- Telefone --}}
                                    <td>
                                        {{ $patient->phone ?? 'Não informado' }}
                                    </td>

                                    {{-- Email --}}
                                    <td>
                                        {{ $patient->email ?? 'Não informado' }}
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
                                    <td colspan="6" class="text-center py-4">
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
