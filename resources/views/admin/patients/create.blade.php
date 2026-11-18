
@extends('layouts.main')

@section('title', 'Cadastrar Paciente')
@section('page-title', 'Cadastrar Paciente')

@section('content')

<div class="row gx-3">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informações do Paciente</h4>
            </div>

            <div class="card-body">

                <form action="{{ route('patients.store') }}" method="POST">
                    @csrf

                    <div class="row">

                        {{-- Nome Completo --}}
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Nome Completo *</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ old('name') }}"
                                placeholder="Nome completo do paciente"
                                required
                            >
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Sexo --}}
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Sexo</label>
                            <select name="gender" class="form-select">
                                <option value="">Selecionar sexo</option>
                                <option value="Masculino" {{ old('gender') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                <option value="Feminino" {{ old('gender') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                            </select>
                        </div>

                        {{-- BI --}}
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Bilhete de Identidade</label>
                            <input
                                type="text"
                                name="BI"
                                class="form-control"
                                value="{{ old('BI') }}"
                                placeholder="Número do BI"
                            >
                        </div>

                        {{-- Data de Nascimento --}}
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Data de Nascimento</label>
                            <input
                                type="date"
                                name="birthDate"
                                class="form-control"
                                value="{{ old('birthDate') }}"
                            >
                        </div>

                        {{-- Telefone --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Telefone</label>
                            <input
                                type="text"
                                name="phone"
                                class="form-control"
                                value="{{ old('phone') }}"
                                placeholder="Ex: 923 000 000"
                            >
                        </div>

                        {{-- Morada --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Morada</label>
                            <input
                                type="text"
                                name="address"
                                class="form-control"
                                value="{{ old('address') }}"
                                placeholder="Endereço do paciente"
                            >
                        </div>

                        {{-- Grupo Sanguíneo --}}
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Grupo Sanguíneo</label>
                            <select name="bloodType" class="form-select">
                                <option value="">Selecionar grupo sanguíneo</option>
                                @foreach(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $grupo)
                                    <option value="{{ $grupo }}" {{ old('bloodType') == $grupo ? 'selected' : '' }}>
                                        {{ $grupo }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                       


                    </div>

                    {{-- Botões --}}
                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <a href="{{ route('patients.index') }}" class="btn btn-outline-secondary">
                            Cancelar
                        </a>

                        <button type="submit" class="btn btn-primary">
                            <i class="ri-save-line me-1"></i>
                            Cadastrar Paciente
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection
