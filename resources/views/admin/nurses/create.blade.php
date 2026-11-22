
@extends('layouts.main')

@section('title', 'Adicionar Enfermeiro')
@section('page-title', 'Adicionar Enfermeiro')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <form action="{{ route('nurses.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="custom-tabs-container">

                            {{-- NAVEGAÇÃO DOS SEPARADORES --}}
                            <ul class="nav nav-tabs" id="nurseTabs" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active"
                                        data-bs-toggle="tab"
                                        data-bs-target="#personal"
                                        type="button">
                                        <i class="ri-user-line me-1"></i>
                                        Dados Pessoais
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link"
                                        data-bs-toggle="tab"
                                        data-bs-target="#professional"
                                        type="button">
                                        <i class="ri-stethoscope-line me-1"></i>
                                        Perfil Profissional
                                    </button>
                                </li>

                             

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link"
                                        data-bs-toggle="tab"
                                        data-bs-target="#account"
                                        type="button">
                                        <i class="ri-lock-password-line me-1"></i>
                                        Dados da Conta
                                    </button>
                                </li>

                            </ul>

                            {{-- CONTEÚDO DOS SEPARADORES --}}
                            <div class="tab-content pt-4">

                                {{-- DADOS PESSOAIS --}}
                                <div class="tab-pane fade show active" id="personal">

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
                                                        value="{{ old('name') }}"
                                                        placeholder="Introduza o nome"
                                                        required>
                                                </div>
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Data de Nascimento</label>
                                                <input type="date"
                                                    name="dateOfBirth"
                                                    class="form-control"
                                                    value="{{ old('dateOfBirth') }}">
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Sexo</label>
                                                <select name="gender" class="form-select">
                                                    <option value="">Seleccionar sexo</option>
                                                    <option value="Masculino" {{ old('gender') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                                    <option value="Feminino" {{ old('gender') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Identificação</label>
                                                <input type="text"
                                                    name="BI"
                                                    class="form-control"
                                                    value="{{ old('BI') }}"
                                                    placeholder="Número de identificação">
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">E-mail</label>
                                                <input type="email"
                                                    name="email"
                                                    class="form-control"
                                                    value="{{ old('email') }}"
                                                    placeholder="exemplo@email.com">
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Telefone</label>
                                                <input type="text"
                                                    name="phone"
                                                    class="form-control"
                                                    value="{{ old('phone') }}"
                                                    placeholder="+244 900 000 000">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Morada</label>
                                                <input type="text"
                                                    name="address"
                                                    class="form-control"
                                                    value="{{ old('address') }}"
                                                    placeholder="Introduza a morada completa">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                {{-- PERFIL PROFISSIONAL --}}
                                <div class="tab-pane fade" id="professional">

                                    <div class="row gx-3">

                                        <div class="col-lg-3 col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Fotografia do Enfermeiro</label>

                                                <div class="border rounded-3 p-3 text-center">
                                                    <img src="{{ asset('assets/images/user6.png') }}"
                                                        class="img-fluid rounded-circle mb-3"
                                                        style="width: 110px; height: 110px; object-fit: cover;"
                                                        alt="Fotografia do enfermeiro">

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
                                            <div class="row gx-3">

                                            

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Especialidade</label>
                                                        <select name="specialty" class="form-select">
                                                            <option value="">Seleccionar especialidade</option>
                                                            @foreach([
                                                                'Enfermagem Geral',
                                                                'Enfermagem Pediátrica',
                                                                'Enfermagem Obstétrica',
                                                                'Enfermagem Cirúrgica',
                                                                'Cuidados Intensivos',
                                                                'Urgência e Emergência',
                                                                'Saúde Pública'
                                                            ] as $specialty)
                                                                <option value="{{ $specialty }}" {{ old('specialty') == $specialty ? 'selected' : '' }}>
                                                                    {{ $specialty }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Número de Inscrição Profissional</label>
                                                        <input type="text"
                                                            name="professionalRegistration"
                                                            class="form-control"
                                                            value="{{ old('professionalRegistration') }}"
                                                            placeholder="Número de inscrição">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Cargo</label>
                                                        <select name="position" class="form-select">
                                                            <option value="">Seleccionar cargo</option>
                                                            @foreach([
                                                                'Enfermeiro',
                                                                'Enfermeiro Chefe',
                                                                'Supervisor de Enfermagem'
                                                            ] as $position)
                                                                <option value="{{ $position }}" {{ old('position') == $position ? 'selected' : '' }}>
                                                                    {{ $position }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                               

                                {{-- DADOS DA CONTA --}}
                                <div class="tab-pane fade" id="account">

                                    <div class="alert alert-warning">
                                        Os campos de utilizador e palavra-passe ainda não estão ligados à tabela de enfermeiros.
                                        Para os guardar, será necessário adicionar as respectivas colunas e implementar a criação da conta.
                                    </div>

                                    <div class="row gx-3">

                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nome de Utilizador</label>
                                                <input type="text"
                                                    class="form-control"
                                                    placeholder="Criar nome de utilizador"
                                                    disabled>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Palavra-passe</label>
                                                <input type="password"
                                                    class="form-control"
                                                    placeholder="Introduza a palavra-passe"
                                                    disabled>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Confirmar Palavra-passe</label>
                                                <input type="password"
                                                    class="form-control"
                                                    placeholder="Confirme a palavra-passe"
                                                    disabled>
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
                                Criar Perfil do Enfermeiro
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
