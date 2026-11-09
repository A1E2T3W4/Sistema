
@extends('layouts.main')

@section('title', 'Editar Paciente')

@section('content')

<div class="content">

    {{-- Título da página --}}
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Editar Paciente</h4>
        </div>
    </div>

    {{-- Formulário --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <div class="card-box">
                <h4 class="card-title">Informações do Paciente</h4>

                <form action="#" method="POST">

                    @csrf

                    <div class="row">

                        {{-- Nome --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nome Completo</label>
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       value="Terry Baker">
                            </div>
                        </div>

                        {{-- Apelido --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Apelido</label>
                                <input type="text"
                                       class="form-control"
                                       name="surname"
                                       value="Baker">
                            </div>
                        </div>

                        {{-- Data de nascimento --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Data de Nascimento</label>
                                <input type="text"
                                       class="form-control"
                                       name="birth_date"
                                       value="15/05/1990">
                            </div>
                        </div>

                        {{-- Idade --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Idade</label>
                                <input type="number"
                                       class="form-control"
                                       name="age"
                                       value="35">
                            </div>
                        </div>

                        {{-- Género --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Género</label>
                                <select class="form-control" name="gender">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>
                        </div>

                        {{-- Telefone --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="text"
                                       class="form-control"
                                       name="phone"
                                       value="+244 923 000 000">
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="terry@example.com">
                            </div>
                        </div>

                        {{-- País --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>País</label>
                                <select class="form-control" name="country">
                                    <option value="Angola" selected>Angola</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Brasil">Brasil</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                        </div>

                        {{-- Província --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Província</label>
                                <select class="form-control" name="province">
                                    <option value="">Seleccione a Província</option>
                                    <option>Luanda</option>
                                    <option>Benguela</option>
                                    <option>Huambo</option>
                                    <option>Bié</option>
                                    <option>Cabinda</option>
                                    <option>Cuando</option>
                                    <option>Cuanza Norte</option>
                                    <option>Cuanza Sul</option>
                                    <option>Cunene</option>
                                    <option>Huíla</option>
                                    <option>Malanje</option>
                                    <option>Moxico</option>
                                    <option>Namibe</option>
                                    <option>Uíge</option>
                                    <option>Zaire</option>
                                    <option>Lunda Norte</option>
                                    <option>Lunda Sul</option>
                                    <option>Bengo</option>
                                    <option>Cubango</option>
                                    <option>Icolo e Bengo</option>
                                    <option>Moxico Leste</option>
                                </select>
                            </div>
                        </div>

                        {{-- Endereço --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Endereço</label>
                                <input type="text"
                                       class="form-control"
                                       name="address"
                                       value="Luanda, Angola">
                            </div>
                        </div>

                        {{-- Grupo sanguíneo --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Grupo Sanguíneo</label>
                                <select class="form-control" name="blood_group">
                                    <option value="">Seleccione</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    {{-- Botões --}}
                    <div class="text-center m-t-20">
                        <a href="{{ url('/patients') }}"
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
