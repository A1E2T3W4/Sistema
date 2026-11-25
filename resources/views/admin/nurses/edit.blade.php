
@extends('layouts.main')

@section('title', 'Editar Especialidade')
@section('page-title', 'Editar Especialidade')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-sm-12">

            <div class="card">

                {{-- Cabeçalho --}}
                <div class="card-header">
                    <h5 class="card-title mb-0">Editar Especialidade</h5>
                </div>

                {{-- Formulário --}}
                <div class="card-body">

                    <form action="{{ route('specialties.update', $specialty->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="row gx-3">

                            {{-- Nome --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Nome da Especialidade
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $specialty->name) }}"
                                    placeholder="Digite o nome da especialidade"
                                    required
                                >

                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Descrição --}}
                            <div class="col-md-12 mb-3">
                                <label class="form-label">
                                    Descrição
                                </label>

                                <textarea
                                    name="description"
                                    class="form-control @error('description') is-invalid @enderror"
                                    rows="4"
                                    placeholder="Digite a descrição da especialidade"
                                >{{ old('description', $specialty->description) }}</textarea>

                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>

                        {{-- Botões --}}
                        <div class="d-flex justify-content-end gap-2">

                            <a href="{{ route('specialties.index') }}"
                               class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i>
                                Actualizar Especialidade
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>

</div>

@endsection
