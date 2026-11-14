
@extends('layouts.main')

@section('title', 'Cadastrar Paciente')

@section('content')

<div class="content">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Cadastrar Paciente</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('patients.index') }}">Pacientes</a>
                    </li>
                    <li class="breadcrumb-item active">Cadastrar Paciente</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Informações do Paciente</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('patients.store') }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            <!-- Nome Completo -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nome Completo *</label>
                                    <input type="text" name="name"
                                           class="form-control"
                                           value="{{ old('name') }}"
                                           placeholder="Nome completo do paciente"
                                           required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Sexo -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select name="gender" class="form-control">
                                        <option value="">Selecionar sexo</option>
                                        <option value="Masculino" {{ old('gender') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                        <option value="Feminino" {{ old('gender') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                                    </select>
                                </div>
                            </div>

                            <!-- BI -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Bilhete de Identidade</label>
                                    <input type="text" name="BI"
                                           class="form-control"
                                           value="{{ old('BI') }}"
                                           placeholder="Número do BI">
                                </div>
                            </div>

                            <!-- Estado Civil -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Estado Civil</label>
                                    <select name="marital_status" class="form-control">
                                        <option value="">Selecionar</option>
                                        <option value="Solteiro(a)" {{ old('marital_status') == 'Solteiro(a)' ? 'selected' : '' }}>Solteiro(a)</option>
                                        <option value="Casado(a)" {{ old('marital_status') == 'Casado(a)' ? 'selected' : '' }}>Casado(a)</option>
                                        <option value="Divorciado(a)" {{ old('marital_status') == 'Divorciado(a)' ? 'selected' : '' }}>Divorciado(a)</option>
                                        <option value="Viúvo(a)" {{ old('marital_status') == 'Viúvo(a)' ? 'selected' : '' }}>Viúvo(a)</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Data de Nascimento -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Data de Nascimento</label>
                                    <input type="date" name="birth_date"
                                           class="form-control"
                                           value="{{ old('birth_date') }}">
                                </div>
                            </div>

                            <!-- Nacionalidade -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nacionalidade</label>
                                    <input type="text" name="nationality"
                                           class="form-control"
                                           value="{{ old('nationality', 'Angolana') }}">
                                </div>
                            </div>

                            <!-- Telefone -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input type="text" name="phone"
                                           class="form-control"
                                           value="{{ old('phone') }}"
                                           placeholder="Ex: 923 000 000">
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email"
                                           class="form-control"
                                           value="{{ old('email') }}"
                                           placeholder="exemplo@email.com">
                                </div>
                            </div>

                            <!-- Morada -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Morada</label>
                                    <input type="text" name="address"
                                           class="form-control"
                                           value="{{ old('address') }}"
                                           placeholder="Endereço do paciente">
                                </div>
                            </div>

                            <!-- Província -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Província</label>
                                    <select name="province" class="form-control">
                                        <option value="">Selecionar província</option>
                                        @foreach([
                                            'Bengo', 'Benguela', 'Bié', 'Cabinda',
                                            'Cuando', 'Cuanza Norte', 'Cuanza Sul',
                                            'Cunene', 'Huambo', 'Huíla', 'Icolo e Bengo',
                                            'Luanda', 'Lunda Norte', 'Lunda Sul',
                                            'Malanje', 'Moxico', 'Moxico Leste',
                                            'Namibe', 'Uíge', 'Zaire'
                                        ] as $provincia)
                                            <option value="{{ $provincia }}"
                                                {{ old('province') == $provincia ? 'selected' : '' }}>
                                                {{ $provincia }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Grupo Sanguíneo -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Grupo Sanguíneo</label>
                                    <select name="blood_type" class="form-control">
                                        <option value="">Selecionar grupo sanguíneo</option>
                                        @foreach(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $grupo)
                                            <option value="{{ $grupo }}"
                                                {{ old('blood_type') == $grupo ? 'selected' : '' }}>
                                                {{ $grupo }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Alergias -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alergias</label>
                                    <textarea name="allergies" rows="3"
                                              class="form-control"
                                              placeholder="Descreva as alergias do paciente">{{ old('allergies') }}</textarea>
                                </div>
                            </div>

                            <!-- Doenças -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Doenças</label>
                                    <textarea name="diseases" rows="3"
                                              class="form-control"
                                              placeholder="Doenças conhecidas">{{ old('diseases') }}</textarea>
                                </div>
                            </div>

                            <!-- Medicamentos -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Medicamentos em Uso</label>
                                    <textarea name="medications" rows="3"
                                              class="form-control"
                                              placeholder="Medicamentos que o paciente utiliza">{{ old('medications') }}</textarea>
                                </div>
                            </div>

                            <!-- Fotografia -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fotografia</label>
                                    <input type="file" name="foto"
                                           class="form-control"
                                           accept="image/*">
                                </div>
                            </div>

                            <!-- Estado -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select name="status" class="form-control" required>
                                        <option value="active" {{ old('status', 'active') == 'active' ? 'selected' : '' }}>Ativo</option>
                                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inativo</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <!-- Botões -->
                        <div class="text-right mt-4">
                            <a href="{{ route('patients.index') }}"
                               class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i>
                                Cadastrar Paciente
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
