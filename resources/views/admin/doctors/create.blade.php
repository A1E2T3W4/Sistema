
@extends('layouts.main')

@section('title', 'Adicionar Médico')
@section('page-title', 'Adicionar Médico')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="custom-tabs-container">

                            {{-- NAVEGAÇÃO DOS SEPARADORES --}}
                            <ul class="nav nav-tabs" id="doctorTabs" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active"
                                        id="personal-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#personal"
                                        type="button"
                                        role="tab">
                                        <i class="ri-briefcase-4-line me-1"></i>
                                        Dados Pessoais
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link"
                                        id="profile-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#profile"
                                        type="button"
                                        role="tab">
                                        <i class="ri-account-pin-circle-line me-1"></i>
                                        Perfil e Biografia
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link"
                                        id="account-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#account"
                                        type="button"
                                        role="tab">
                                        <i class="ri-lock-password-line me-1"></i>
                                        Dados da Conta
                                    </button>
                                </li>

                            </ul>

                            {{-- CONTEÚDO DOS SEPARADORES --}}
                            <div class="tab-content pt-4">

                                {{-- DADOS PESSOAIS --}}
                                <div class="tab-pane fade show active"
                                    id="personal"
                                    role="tabpanel">

                                    <div class="row gx-3">

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nome</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="ri-user-line"></i>
                                                    </span>
                                                    <input type="text"
                                                        name="name"
                                                        class="form-control"
                                                        placeholder="Introduza o nome"
                                                        value="{{ old('name') }}">
                                                </div>
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Data de Nascimento</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="ri-calendar-line"></i>
                                                    </span>
                                                    <input type="date"
                                                        name="birthDate"
                                                        class="form-control"
                                                        value="{{ old('birthDate') }}">
                                                </div>
                                                @error('birthDate')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Género</label>
                                                <select name="gender" class="form-select">
                                                    <option value="">Seleccionar sexo</option>
                                                    <option value="Masculino" {{ old('gender') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                                    <option value="Feminino" {{ old('gender') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                                                </select>
                                                @error('gender')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Identificação</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="ri-secure-payment-line"></i>
                                                    </span>
                                                    <input type="text"
                                                        name="BI"
                                                        class="form-control"
                                                        placeholder="Número do BI"
                                                        value="{{ old('BI') }}">
                                                </div>
                                                @error('BI')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">E-mail</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="ri-mail-line"></i>
                                                    </span>
                                                    <input type="email"
                                                        name="email"
                                                        class="form-control"
                                                        placeholder="exemplo@email.com"
                                                        value="{{ old('email') }}">
                                                </div>
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Telefone</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="ri-phone-line"></i>
                                                    </span>
                                                    <input type="text"
                                                        name="phone"
                                                        class="form-control"
                                                        placeholder="+244 900 000 000"
                                                        value="{{ old('phone') }}">
                                                </div>
                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Qualificação Académica</label>
                                                <select name="qualification" class="form-select">
                                                    <option value="">Seleccionar</option>
                                                    <option value="Licenciatura" {{ old('qualification') == 'Licenciatura' ? 'selected' : '' }}>Licenciatura</option>
                                                    <option value="Mestrado" {{ old('qualification') == 'Mestrado' ? 'selected' : '' }}>Mestrado</option>
                                                    <option value="Doutoramento" {{ old('qualification') == 'Doutoramento' ? 'selected' : '' }}>Doutoramento</option>
                                                    <option value="Especialização" {{ old('qualification') == 'Especialização' ? 'selected' : '' }}>Especialização</option>
                                                </select>
                                                @error('qualification')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Especialidade Médica</label>
                                                <select name="specialty" class="form-select">
                                                    <option value="">Seleccionar especialidade</option>
                                                    <option value="Clínica Geral" {{ old('specialty') == 'Clínica Geral' ? 'selected' : '' }}>Clínica Geral</option>
                                                    <option value="Cardiologia" {{ old('specialty') == 'Cardiologia' ? 'selected' : '' }}>Cardiologia</option>
                                                    <option value="Pediatria" {{ old('specialty') == 'Pediatria' ? 'selected' : '' }}>Pediatria</option>
                                                    <option value="Cirurgia Geral" {{ old('specialty') == 'Cirurgia Geral' ? 'selected' : '' }}>Cirurgia Geral</option>
                                                    <option value="Ginecologia" {{ old('specialty') == 'Ginecologia' ? 'selected' : '' }}>Ginecologia</option>
                                                    <option value="Ortopedia" {{ old('specialty') == 'Ortopedia' ? 'selected' : '' }}>Ortopedia</option>
                                                    <option value="Neurologia" {{ old('specialty') == 'Neurologia' ? 'selected' : '' }}>Neurologia</option>
                                                    <option value="Dermatologia" {{ old('specialty') == 'Dermatologia' ? 'selected' : '' }}>Dermatologia</option>
                                                    <option value="Oftalmologia" {{ old('specialty') == 'Oftalmologia' ? 'selected' : '' }}>Oftalmologia</option>
                                                </select>
                                                @error('specialty')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Cargo</label>
                                                <select name="position" class="form-select">
                                                    <option value="">Seleccionar cargo</option>
                                                    <option value="Médico" {{ old('position') == 'Médico' ? 'selected' : '' }}>Médico</option>
                                                    <option value="Chefe de Departamento" {{ old('position') == 'Chefe de Departamento' ? 'selected' : '' }}>Chefe de Departamento</option>
                                                    <option value="Director Clínico" {{ old('position') == 'Director Clínico' ? 'selected' : '' }}>Director Clínico</option>
                                                </select>
                                                @error('position')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Morada</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="ri-map-pin-line"></i>
                                                    </span>
                                                    <input type="text"
                                                        name="address"
                                                        class="form-control"
                                                        placeholder="Introduza a morada completa"
                                                        value="{{ old('address') }}">
                                                </div>
                                                @error('address')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                {{-- PERFIL E BIOGRAFIA --}}
                                <div class="tab-pane fade" id="profile" role="tabpanel">

                                    <div class="row gx-3">

                                        <div class="col-lg-3 col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Fotografia do Médico</label>

                                                <div class="border rounded-3 p-3 text-center">
                                                    <img src="{{ asset('assets/images/user6.png') }}"
                                                        class="img-fluid rounded-circle mb-3"
                                                        style="width: 110px; height: 110px; object-fit: cover;"
                                                        alt="Fotografia do médico">

                                                    <input type="file"
                                                        name="photo"
                                                        class="form-control"
                                                        accept="image/*">
                                                </div>
                                                @error('photo')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-8">
                                            <div class="mb-3">
                                                <label class="form-label">Biografia Profissional</label>
                                                <textarea name="biography"
                                                    class="form-control"
                                                    rows="7"
                                                    placeholder="Descreva a experiência profissional, formação e competências do médico...">{{ old('biography') }}</textarea>
                                                @error('biography')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                {{-- DADOS DA CONTA: FICA PARA MAIS TARDE --}}
                                <div class="tab-pane fade" id="account" role="tabpanel">

                                    <div class="row gx-3">

                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nome de Utilizador</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="ri-user-settings-line"></i>
                                                    </span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Criar nome de utilizador">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Palavra-passe</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="ri-lock-password-line"></i>
                                                    </span>
                                                    <input type="password" class="form-control"
                                                        placeholder="Introduza a palavra-passe">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Confirmar Palavra-passe</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="ri-lock-password-line"></i>
                                                    </span>
                                                    <input type="password" class="form-control"
                                                        placeholder="Confirme a palavra-passe">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- ACÇÕES --}}
                        <div class="d-flex gap-2 justify-content-end mt-4">

                            <button type="submit" class="btn btn-primary">
                                <i class="ri-user-add-line me-1"></i>
                                Criar Perfil do Médico
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
