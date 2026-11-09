
@extends('layouts.main')

@section('title', 'Editar Departamento')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Editar Departamento</h4>
        </div>
    </div>

    {{-- Formulário --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form action="#" method="POST">
                @csrf

                <div class="form-group">
                    <label>Nome do Departamento</label>
                    <input
                        class="form-control"
                        type="text"
                        name="name"
                        value="Dentistas"
                    >
                </div>

                <div class="form-group">
                    <label>Descrição</label>
                    <textarea
                        cols="30"
                        rows="4"
                        class="form-control"
                        name="description"
                    ></textarea>
                </div>

                <div class="form-group">
                    <label class="display-block">Estado do Departamento</label>

                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="status"
                            id="department_active"
                            value="active"
                            checked
                        >

                        <label class="form-check-label" for="department_active">
                            Activo
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="status"
                            id="department_inactive"
                            value="inactive"
                        >

                        <label class="form-check-label" for="department_inactive">
                            Inactivo
                        </label>
                    </div>
                </div>

                <div class="m-t-20 text-center">
                    <a href="{{ route('departments.index') }}" class="btn btn-secondary submit-btn">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-primary submit-btn">
                        Guardar Departamento
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
