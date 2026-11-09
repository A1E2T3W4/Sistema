
@extends('layouts.main')

@section('title', 'Editar Perfil')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Editar Perfil</h4>
        </div>
    </div>

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Informações básicas --}}
        <div class="card-box">
            <h3 class="card-title">Informações Básicas</h3>

            <div class="row">
                <div class="col-md-12">

                    <div class="profile-img-wrap">
                        <img class="inline-block"
                             src="{{ asset('assets/img/user.jpg') }}"
                             alt="Foto do utilizador">

                        <div class="fileupload btn">
                            <span class="btn-text">Editar</span>
                            <input class="upload" type="file" name="photo" accept="image/*">
                        </div>
                    </div>

                    <div class="profile-basic">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Nome</label>
                                    <input type="text"
                                           name="first_name"
                                           class="form-control floating"
                                           value="{{ old('first_name') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Apelido</label>
                                    <input type="text"
                                           name="last_name"
                                           class="form-control floating"
                                           value="{{ old('last_name') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Data de Nascimento</label>
                                    <div class="cal-icon">
                                        <input type="text"
                                               name="birth_date"
                                               class="form-control floating datetimepicker"
                                               value="{{ old('birth_date') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-focus select-focus">
                                    <label class="focus-label">Género</label>
                                    <select name="gender" class="select form-control floating">
                                        <option value="">Seleccionar</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Informações de contacto --}}
        <div class="card-box">
            <h3 class="card-title">Informações de Contacto</h3>

            <div class="row">

                <div class="col-md-12">
                    <div class="form-group form-focus">
                        <label class="focus-label">Endereço</label>
                        <input type="text"
                               name="address"
                               class="form-control floating"
                               value="{{ old('address') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Província</label>
                        <input type="text"
                               name="province"
                               class="form-control floating"
                               value="{{ old('province') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">País</label>
                        <input type="text"
                               name="country"
                               class="form-control floating"
                               value="{{ old('country', 'Angola') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Código Postal</label>
                        <input type="text"
                               name="postal_code"
                               class="form-control floating"
                               value="{{ old('postal_code') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Número de Telefone</label>
                        <input type="text"
                               name="phone"
                               class="form-control floating"
                               value="{{ old('phone', auth()->user()->phone ?? '') }}">
                    </div>
                </div>

            </div>
        </div>

        {{-- Informações académicas --}}
        <div class="card-box">
            <h3 class="card-title">Informações Académicas</h3>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Instituição</label>
                        <input type="text"
                               name="institution"
                               class="form-control floating"
                               value="{{ old('institution') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Área de Formação</label>
                        <input type="text"
                               name="subject"
                               class="form-control floating"
                               value="{{ old('subject') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Data de Início</label>
                        <div class="cal-icon">
                            <input type="text"
                                   name="start_date"
                                   class="form-control floating datetimepicker"
                                   value="{{ old('start_date') }}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Data de Conclusão</label>
                        <div class="cal-icon">
                            <input type="text"
                                   name="end_date"
                                   class="form-control floating datetimepicker"
                                   value="{{ old('end_date') }}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Grau Académico</label>
                        <input type="text"
                               name="degree"
                               class="form-control floating"
                               value="{{ old('degree') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Classificação</label>
                        <input type="text"
                               name="grade"
                               class="form-control floating"
                               value="{{ old('grade') }}">
                    </div>
                </div>

            </div>

            <div class="add-more">
                <a href="#" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Adicionar Outra Instituição
                </a>
            </div>
        </div>

        {{-- Informações profissionais --}}
        <div class="card-box">
            <h3 class="card-title">Informações Profissionais</h3>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Nome da Instituição</label>
                        <input type="text"
                               name="company_name"
                               class="form-control floating"
                               value="{{ old('company_name') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Localização</label>
                        <input type="text"
                               name="company_location"
                               class="form-control floating"
                               value="{{ old('company_location') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Cargo ou Função</label>
                        <input type="text"
                               name="job_position"
                               class="form-control floating"
                               value="{{ old('job_position') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Data de Início</label>
                        <div class="cal-icon">
                            <input type="text"
                                   name="work_start_date"
                                   class="form-control floating datetimepicker"
                                   value="{{ old('work_start_date') }}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="focus-label">Data de Fim</label>
                        <div class="cal-icon">
                            <input type="text"
                                   name="work_end_date"
                                   class="form-control floating datetimepicker"
                                   value="{{ old('work_end_date') }}">
                        </div>
                    </div>
                </div>

            </div>

            <div class="add-more">
                <a href="#" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Adicionar Outra Experiência
                </a>
            </div>
        </div>

        {{-- Botão --}}
        <div class="text-center m-t-20">
            <button class="btn btn-primary submit-btn" type="button">
                Guardar Alterações
            </button>
        </div>

    </form>

</div>

@endsection
