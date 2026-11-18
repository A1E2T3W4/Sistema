
@extends('layouts.main')

@section('title', 'Editar Paciente')
@section('page-title', 'Editar Paciente')

@section('content')

<div class="row gx-3">
    <div class="col-sm-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title">Editar Dados do Paciente</h5>
            </div>

           <div class="card-body p-5" margin="10px">

                <form action="{{ route('patients.update', $patient->id) }}"
                      method="POST">

                    @csrf
                    @method('PUT')

                    <div class="row gx-3">

                        {{-- Nome Completo --}}
                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Nome Completo *</label>
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    value="{{ old('name', $patient->name) }}"
                                    placeholder="Nome completo do paciente"
                                    required
                                >
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Data de Nascimento --}}
                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Data de Nascimento</label>
                                <input
                                    type="date"
                                    name="birthDate"
                                    class="form-control"
                                    value="{{ old('birthDate', $patient->birthDate ? \Illuminate\Support\Carbon::parse($patient->birthDate)->format('Y-m-d') : '') }}"
                                >
                            </div>
                        </div>

                        {{-- Sexo --}}
                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Sexo</label>
                                <select name="gender" class="form-select">
                                    <option value="">Selecionar sexo</option>
                                    <option value="Masculino" {{ old('gender', $patient->gender) == 'Masculino' ? 'selected' : '' }}>
                                        Masculino
                                    </option>
                                    <option value="Feminino" {{ old('gender', $patient->gender) == 'Feminino' ? 'selected' : '' }}>
                                        Feminino
                                    </option>
                                </select>
                            </div>
                        </div>

                        {{-- Bilhete de Identidade --}}
                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Bilhete de Identidade</label>
                                <input
                                    type="text"
                                    name="BI"
                                    class="form-control"
                                    value="{{ old('BI', $patient->BI) }}"
                                    placeholder="Número do BI"
                                >
                            </div>
                        </div>

                        {{-- Telefone --}}
                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Telefone</label>
                                <input
                                    type="text"
                                    name="phone"
                                    class="form-control"
                                    value="{{ old('phone', $patient->phone) }}"
                                    placeholder="Ex: 923 000 000"
                                >
                            </div>
                        </div>

                        {{-- Grupo Sanguíneo --}}
                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Grupo Sanguíneo</label>
                                <select name="bloodType" class="form-select">
                                    <option value="">Selecionar grupo sanguíneo</option>

                                    @foreach(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $grupo)
                                        <option value="{{ $grupo }}"
                                            {{ old('bloodType', $patient->bloodType) == $grupo ? 'selected' : '' }}>
                                            {{ $grupo }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Morada --}}
                        <div class="col-xxl-12 col-lg-12 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Morada</label>
                                <input
                                    type="text"
                                    name="address"
                                    class="form-control"
                                    value="{{ old('address', $patient->address) }}"
                                    placeholder="Endereço do paciente"
                                >
                            </div>
                        </div>

                      

                       

                        {{-- Botões --}}
                        <div class="col-sm-12">
                            <div class="d-flex gap-2 justify-content-end">

                                <a href="{{ route('patients.index') }}"
                                   class="btn btn-outline-secondary">
                                    Cancelar
                                </a>

                                <button type="submit" class="btn btn-primary">
                                    <i class="ri-save-line me-1"></i>
                                    Guardar Alterações
                                </button>

                            </div>
                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection
