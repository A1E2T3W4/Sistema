
@extends('layouts.main')

@section('title', 'Adicionar Especialidade')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Adicionar Especialidade</h4>
        </div>
    </div>

    {{-- Formulário --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form action="{{ route('specialties.store') }}" method="POST">
                @csrf

                {{-- Nome da Especialidade --}}
                <div class="form-group">
                    <label>Nome da Especialidade <span class="text-danger">*</span></label>

                    <input
                        class="form-control @error('name') is-invalid @enderror"
                        type="text"
                        name="name"
                        placeholder="Digite o nome da especialidade"
                        value="{{ old('name') }}"
                        required
                    >

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Descrição --}}
                <div class="form-group">
                    <label>Descrição</label>

                    <textarea
                        rows="4"
                        class="form-control @error('description') is-invalid @enderror"
                        name="description"
                        placeholder="Digite a descrição da especialidade"
                    >{{ old('description') }}</textarea>

                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Estado da Especialidade --}}
                <div class="form-group">
                    <label class="display-block">Estado da Especialidade</label>

                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="status"
                            id="specialty_active"
                            value="active"
                            {{ old('status', 'active') == 'active' ? 'checked' : '' }}
                        >

                        <label class="form-check-label" for="specialty_active">
                            Activa
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="status"
                            id="specialty_inactive"
                            value="inactive"
                            {{ old('status') == 'inactive' ? 'checked' : '' }}
                        >

                        <label class="form-check-label" for="specialty_inactive">
                            Inactiva
                        </label>
                    </div>

                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Botões --}}
                <div class="m-t-20 text-center">

                    <a href="{{ route('specialties.index') }}"
                       class="btn btn-secondary submit-btn">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-primary submit-btn">
                        Criar Especialidade
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection
