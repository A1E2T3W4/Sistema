
@extends('layouts.main')

@section('title', 'Editar Funcionário')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Editar Funcionário</h4>
        </div>
    </div>

    {{-- Formulário --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form action="#" method="POST">
                @csrf

                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nome <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="António">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Apelido</label>
                            <input class="form-control" type="text" value="Wanandumbo">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nome de Utilizador <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="antonio">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input class="form-control" type="email" value="funcionario@email.com">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Palavra-passe</label>
                            <input class="form-control" type="password">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Confirmar Palavra-passe</label>
                            <input class="form-control" type="password">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>N.º de Funcionário <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="FUNC001">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Data de Admissão <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text" value="08/11/2026">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input class="form-control" type="text" value="+244 900 000 000">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Função</label>
                            <select class="select">
                                <option value="admin">Administrador</option>
                                <option value="doctor" selected>Médico</option>
                                <option value="nurse">Enfermeiro</option>
                                <option value="receptionist">Recepcionista</option>
                                <option value="laboratory">Técnico de laboratório</option>
                                <option value="pharmacist">Farmacêutico</option>
                                <option value="accountant">Director financeiro</option>
                                <option value="maternity">Profissional de maternidade</option>
                                <option value="emergency">Técnico de urgência</option>
                                <option value="ambulance">Técnico de ambulância</option>
                                <option value="blood_bank">Técnico de banco de sangue</option>
                            </select>
                        </div>
                    </div>

                </div>

                {{-- Estado --}}
                <div class="form-group">
                    <label class="display-block">Estado</label>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input"
                               type="radio"
                               name="status"
                               id="employee_active"
                               value="active"
                               checked>

                        <label class="form-check-label" for="employee_active">
                            Activo
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input"
                               type="radio"
                               name="status"
                               id="employee_inactive"
                               value="inactive">

                        <label class="form-check-label" for="employee_inactive">
                            Inactivo
                        </label>
                    </div>
                </div>

                {{-- Botões --}}
                <div class="m-t-20 text-center">
                    <a href="{{ route('employees.index') }}" class="btn btn-secondary submit-btn">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-primary submit-btn">
                        Guardar Alterações
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
