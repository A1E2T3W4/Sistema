
@extends('layouts.main')

@section('title', 'Editar Enfermeiro')
@section('page-title', 'Editar Enfermeiro')

@section('content')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">

                    <form action="{{ route('nurses.update', ['id' => $nurse->id]) }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="row gx-3">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" name="name"
                                       class="form-control"
                                       value="{{ old('name', $nurse->name) }}"
                                       required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Data de Nascimento</label>
                                <input type="date" name="dateOfBirth"
                                       class="form-control"
                                       value="{{ old('dateOfBirth', $nurse->dateOfBirth) }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Genero</label>
                                <select name="gender" class="form-select">
                                    <option value="">Seleccionar genero</option>
                                    <option value="Masculino" {{ old('gender', $nurse->gender) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                    <option value="Feminino" {{ old('gender', $nurse->gender) == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Identificação</label>
                                <input type="text" name="BI"
                                       class="form-control"
                                       value="{{ old('BI', $nurse->BI) }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">E-mail</label>
                                <input type="email" name="email"
                                       class="form-control"
                                       value="{{ old('email', $nurse->email) }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Telefone</label>
                                <input type="text" name="phone"
                                       class="form-control"
                                       value="{{ old('phone', $nurse->phone) }}">
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label">Morada</label>
                                <input type="text" name="address"
                                       class="form-control"
                                       value="{{ old('address', $nurse->address) }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Fotografia</label>

                                @if($nurse->photo)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $nurse->photo) }}"
                                             width="100"
                                             height="100"
                                             class="rounded-circle"
                                             style="object-fit: cover;">
                                    </div>
                                @endif

                                <input type="file" name="photo"
                                       class="form-control"
                                       accept="image/*">
                            </div>

                            <div class="col-md-6 mb-3">
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

                                        <option value="{{ $specialty }}"
                                            {{ old('specialty', $nurse->specialty) == $specialty ? 'selected' : '' }}>
                                            {{ $specialty }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Número de Inscrição Profissional</label>
                                <input type="text"
                                       name="professionalRegistration"
                                       class="form-control"
                                       value="{{ old('professionalRegistration', $nurse->professionalRegistration) }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Cargo</label>
                                <select name="position" class="form-select">
                                    <option value="">Seleccionar cargo</option>

                                    @foreach([
                                        'Enfermeiro',
                                        'Enfermeiro Chefe',
                                        'Supervisor de Enfermagem'
                                    ] as $position)

                                        <option value="{{ $position }}"
                                            {{ old('position', $nurse->position) == $position ? 'selected' : '' }}>
                                            {{ $position }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">

                         

                            <button type="submit" class="btn btn-primary">
                                <i class="ri-save-line me-1"></i>
                                Actualizar Enfermeiro
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
