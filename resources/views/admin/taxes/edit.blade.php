
@extends('layouts.main')

@section('title', 'Editar Imposto')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Editar Imposto</h4>
        </div>
    </div>

    {{-- Formulário --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <form action="#" method="POST">
                @csrf

                <div class="form-group">
                    <label>
                        Nome do Imposto
                        <span class="text-danger">*</span>
                    </label>

                    <input
                        class="form-control"
                        type="text"
                        name="name"
                        value="IVA"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>
                        Percentagem do Imposto (%)
                        <span class="text-danger">*</span>
                    </label>

                    <input
                        class="form-control"
                        type="number"
                        name="percentage"
                        value="14"
                        step="0.01"
                        min="0"
                        max="100"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>
                        Estado
                        <span class="text-danger">*</span>
                    </label>

                    <select class="select" name="status" required>
                        <option value="active" selected>Activo</option>
                        <option value="inactive">Inactivo</option>
                    </select>
                </div>

                <div class="m-t-20 text-center">

                    <a href="{{ route('taxes.index') }}"
                       class="btn btn-secondary submit-btn">
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
