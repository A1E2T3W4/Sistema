
@extends('layouts.main')

@section('title', 'Editar Paciente')

@section('content')

<div class="content">

    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Editar Paciente</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <div class="card-box">
                <h4 class="card-title">Informações do Paciente</h4>

                <form action="{{ route('patients.update', $patient->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="row">

                        <!-- Nome Completo -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nome Completo *</label>
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       value="{{ old('name', $patient->name) }}"
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
                                <select class="form-control" name="gender">
                                    <option value="">Selecionar</option>
                                    <option value="Masculino" {{ old('gender', $patient->gender) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                    <option value="Feminino" {{ old('gender', $patient->gender) == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                                </select>
                            </div>
                        </div>

                        <!-- BI -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Bilhete de Identidade</label>
                                <input type="text"
                                       class="form-control"
                                       name="BI"
                                       value="{{ old('BI', $patient->BI) }}">
                            </div>
                        </div>

                        <!-- Estado Civil -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Estado Civil</label>
                                <select class="form-control" name="marital_status">
                                    <option value="">Selecionar</option>
                                    @foreach(['Solteiro(a)', 'Casado(a)', 'Divorciado(a)', 'Viúvo(a)'] as $estado)
                                        <option value="{{ $estado }}"
                                            {{ old('marital_status', $patient->marital_status) == $estado ? 'selected' : '' }}>
                                            {{ $estado }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Data de Nascimento -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Data de Nascimento</label>
                                <input type="date"
                                       class="form-control"
                                       name="birth_date"
                                       value="{{ old('birth_date', $patient->birth_date ? \Illuminate\Support\Carbon::parse($patient->birth_date)->format('Y-m-d') : '') }}">
                            </div>
                        </div>

                        <!-- Nacionalidade -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nacionalidade</label>
                                <input type="text"
                                       class="form-control"
                                       name="nationality"
                                       value="{{ old('nationality', $patient->nationality) }}">
                            </div>
                        </div>

                        <!-- Telefone -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="text"
                                       class="form-control"
                                       name="phone"
                                       value="{{ old('phone', $patient->phone) }}">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email', $patient->email) }}">
                            </div>
                        </div>

                        <!-- Província -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Província</label>
                                <select class="form-control" name="province">
                                    <option value="">Selecione a Província</option>
                                    @foreach([
                                        'Bengo', 'Benguela', 'Bié', 'Cabinda',
                                        'Cuando', 'Cubango', 'Cuanza Norte',
                                        'Cuanza Sul', 'Cunene', 'Huambo', 'Huíla',
                                        'Icolo e Bengo', 'Luanda', 'Lunda Norte',
                                        'Lunda Sul', 'Malanje', 'Moxico',
                                        'Moxico Leste', 'Namibe', 'Uíge', 'Zaire'
                                    ] as $provincia)
                                        <option value="{{ $provincia }}"
                                            {{ old('province', $patient->province) == $provincia ? 'selected' : '' }}>
                                            {{ $provincia }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Morada -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Morada</label>
                                <input type="text"
                                       class="form-control"
                                       name="address"
                                       value="{{ old('address', $patient->address) }}">
                            </div>
                        </div>

                        <!-- Grupo Sanguíneo -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Grupo Sanguíneo</label>
                                <select class="form-control" name="blood_type">
                                    <option value="">Selecione</option>
                                    @foreach(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $grupo)
                                        <option value="{{ $grupo }}"
                                            {{ old('blood_type', $patient->blood_type) == $grupo ? 'selected' : '' }}>
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
                                <textarea class="form-control"
                                          name="allergies"
                                          rows="3">{{ old('allergies', $patient->allergies) }}</textarea>
                            </div>
                        </div>

                        <!-- Doenças -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Doenças</label>
                                <textarea class="form-control"
                                          name="diseases"
                                          rows="3">{{ old('diseases', $patient->diseases) }}</textarea>
                            </div>
                        </div>

                        <!-- Medicamentos -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Medicamentos em Uso</label>
                                <textarea class="form-control"
                                          name="medications"
                                          rows="3">{{ old('medications', $patient->medications) }}</textarea>
                            </div>
                        </div>

                        <!-- Fotografia -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fotografia</label>
                                <input type="file"
                                       class="form-control"
                                       name="foto"
                                       accept="image/*">

                                @if($patient->foto)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/'.$patient->foto) }}"
                                             alt="Fotografia do paciente"
                                             width="100"
                                             height="100"
                                             style="object-fit: cover; border-radius: 8px;">
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Estado -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Estado</label>
                                <select class="form-control" name="status">
                                    <option value="active" {{ old('status', $patient->status) == 'active' ? 'selected' : '' }}>Ativo</option>
                                    <option value="inactive" {{ old('status', $patient->status) == 'inactive' ? 'selected' : '' }}>Inativo</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <!-- Botões -->
                    <div class="text-center m-t-20">

                        <a href="{{ route('patients.index') }}"
                           class="btn btn-secondary">
                            Cancelar
                        </a>

                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i>
                            Guardar Alterações
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>

</div>

@endsection
