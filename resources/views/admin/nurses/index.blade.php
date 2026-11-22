
@extends('layouts.main')

@section('title', 'Enfermeiros')
@section('page-title', 'Enfermeiros')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-12">

            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Lista de Enfermeiros</h5>

                    <a href="{{ route('nurses.create') }}" class="btn btn-primary">
                        <i class="ri-add-line me-1"></i>
                        Adicionar Enfermeiro
                    </a>
                </div>

                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">

                        <table class="table table-hover align-middle">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fotografia</th>
                                    <th>Nome</th>
                                    <th>Especialidade</th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>
                                    <th>Cargo</th>
                                    <th>Acções</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse($nurses as $nurse)

                                    <tr>
                                        <td>#{{ $nurse->id }}</td>

                                        <td>
                                            @if($nurse->photo)
                                                <img src="{{ asset('storage/' . $nurse->photo) }}"
                                                     width="40"
                                                     height="40"
                                                     class="rounded-circle"
                                                     style="object-fit: cover;">
                                            @else
                                                <img src="{{ asset('assets/images/user6.png') }}"
                                                     width="40"
                                                     height="40"
                                                     class="rounded-circle">
                                            @endif
                                        </td>

                                        <td>{{ $nurse->name }}</td>
                                        <td>{{ $nurse->specialty ?? '-' }}</td>
                                        <td>{{ $nurse->phone ?? '-' }}</td>
                                        <td>{{ $nurse->email ?? '-' }}</td>
                                        <td>{{ $nurse->position ?? '-' }}</td>

                                        <td>
                                            <div class="d-flex gap-1">

                                                <a href="{{ route('nurses.edit', ['id' => $nurse->id]) }}"
                                                   class="btn btn-primary btn-sm"
                                                   title="Editar">
                                                    <i class="ri-edit-line"></i>
                                                </a>

                                                <form action="{{ route('nurses.destroy', ['id' => $nurse->id]) }}"
                                                      method="POST"
                                                      onsubmit="return confirm('Deseja eliminar este enfermeiro?')">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="btn btn-danger btn-sm"
                                                            title="Eliminar">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>

                                                </form>

                                            </div>
                                        </td>
                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="8" class="text-center">
                                            Nenhum enfermeiro registado.
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                    <div class="mt-3">
                        {{ $nurses->links() }}
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
