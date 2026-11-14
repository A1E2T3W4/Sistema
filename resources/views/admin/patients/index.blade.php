@extends('layouts.main')

@section('title', 'Lista de Pacientes')

@section('content')

<div class="content">

    {{-- Título e botão --}}
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Pacientes</h4>
        </div>

        <div class="col-sm-8 col-9 text-right m-b-20">
            <a href="{{ route('patients.create') }}"
                class="btn btn-primary btn-rounded float-right">
                <i class="fa fa-plus"></i> Adicionar Paciente
            </a>
        </div>
    </div>

    {{-- Mensagem de sucesso --}}
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
    </div>
    @endif

    {{-- Tabela de pacientes --}}
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">

                <table class="table table-border table-striped custom-table datatable mb-0">

                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th class="text-right">Acção</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($patients as $patient)

                        <tr>
                            <td>
                                <img
                                    width="28"
                                    height="28"
                                    src="{{ $patient->foto ? asset('storage/'.$patient->foto) : asset('assets/img/user.jpg') }}"
                                    class="rounded-circle m-r-5"
                                    alt="Foto do paciente">

                                {{ $patient->name }}
                            </td>

                            <td>
                                {{ $patient->birth_date
                                        ? \Carbon\Carbon::parse($patient->birth_date)->age
                                        : 'Não informado' }}
                            </td>

                            <td>{{ $patient->address ?? 'Não informado' }}</td>

                            <td>{{ $patient->phone ?? 'Não informado' }}</td>

                            <td>{{ $patient->email ?? 'Não informado' }}</td>

                            <td class="text-right">

                                <div class="dropdown dropdown-action">

                                    <a href="#"
                                        class="action-icon dropdown-toggle"
                                        data-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">

                                   

                                        <a href="{{ route('patients.edit', $patient->id) }}"
                                            class="dropdown-item">
                                            <i class="fa fa-pencil m-r-5"></i> Editar
                                        </a>

                                        {{-- Eliminar --}}
                                        <form action="{{ route('patients.destroy', $patient->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Tem a certeza de que deseja eliminar este paciente?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="dropdown-item">
                                                <i class="fa fa-trash-o m-r-5"></i>
                                                Eliminar
                                            </button>

                                        </form>

                                    </div>
                                </div>

                            </td>
                        </tr>

                        @empty

                        <tr>
                            <td colspan="6" class="text-center">
                                Nenhum paciente registado.
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>

                {{-- Paginação --}}
                <div class="mt-3">
                    {{ $patients->links() }}
                </div>

            </div>
        </div>
    </div>

</div>

@endsection