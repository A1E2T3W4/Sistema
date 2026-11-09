
@extends('layouts.main')

@section('title', 'Adicionar Paciente')

@section('content')

<div class="content">

    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Adicionar Paciente</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form>

                <div class="row">

                    {{-- Nome --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Primeiro Nome <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="first_name">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Último Nome</label>
                            <input class="form-control" type="text" name="last_name">
                        </div>
                    </div>

                    {{-- Conta --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nome de Utilizador <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="username">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input class="form-control" type="email" name="email">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Palavra-passe</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Confirmar Palavra-passe</label>
                            <input class="form-control" type="password" name="password_confirmation">
                        </div>
                    </div>

                    {{-- Data de nascimento --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Data de Nascimento</label>
                            <div class="cal-icon">
                                <input
                                    type="text"
                                    class="form-control datetimepicker"
                                    name="date_of_birth"
                                >
                            </div>
                        </div>
                    </div>

                    {{-- Género --}}
                    <div class="col-sm-6">
                        <div class="form-group gender-select">
                            <label class="gen-label">Género:</label>

                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="gender" value="Masculino" class="form-check-input">
                                    Masculino
                                </label>
                            </div>

                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="gender" value="Feminino" class="form-check-input">
                                    Feminino
                                </label>
                            </div>
                        </div>
                    </div>

                    {{-- Endereço --}}
                    <div class="col-sm-12">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Endereço</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>País</label>
                                    <select class="form-control select" name="country">
                                        <option value="Angola">Angola</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Brasil">Brasil</option>
                                        <option value="Outro">Outro</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Cidade</label>
                                    <input type="text" class="form-control" name="city">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Província</label>
                                    <select class="form-control select" name="province">
                                        <option value="">Selecionar</option>
                                        <option>Luanda</option>
                                        <option>Benguela</option>
                                        <option>Huambo</option>
                                        <option>Huíla</option>
                                        <option>Bié</option>
                                        <option>Cabinda</option>
                                        <option>Cuando</option>
                                        <option>Cubango</option>
                                        <option>Cuanza Norte</option>
                                        <option>Cuanza Sul</option>
                                        <option>Cunene</option>
                                        <option>Malanje</option>
                                        <option>Moxico</option>
                                        <option>Moxico Leste</option>
                                        <option>Namibe</option>
                                        <option>Uíge</option>
                                        <option>Zaire</option>
                                        <option>Icolo e Bengo</option>
                                        <option>Bengo</option>
                                        <option>Lunda Norte</option>
                                        <option>Lunda Sul</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Código Postal</label>
                                    <input type="text" class="form-control" name="postal_code">
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Contacto --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input class="form-control" type="text" name="phone">
                        </div>
                    </div>

                    {{-- Fotografia --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Fotografia</label>

                            <div class="profile-upload">
                                <div class="upload-img">
                                    <img
                                        alt=""
                                        src="{{ asset('assets/img/user.jpg') }}"
                                    >
                                </div>

                                <div class="upload-input">
                                    <input
                                        type="file"
                                        class="form-control"
                                        name="avatar"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Estado --}}
                <div class="form-group">

                    <label class="display-block">Estado</label>

                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="status"
                            id="patient_active"
                            value="active"
                            checked
                        >

                        <label class="form-check-label" for="patient_active">
                            Activo
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="status"
                            id="patient_inactive"
                            value="inactive"
                        >

                        <label class="form-check-label" for="patient_inactive">
                            Inactivo
                        </label>
                    </div>

                </div>

                {{-- Botão --}}
                <div class="m-t-20 text-center">
                    <button type="submit" class="btn btn-primary submit-btn">
                        Criar Paciente
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection