
@extends('layouts.main')

@section('title', 'Adicionar Imposto')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Adicionar Imposto</h4>
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
                        placeholder="Ex.: IVA"
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
                        step="0.01"
                        min="0"
                        max="100"
                        placeholder="Ex.: 14"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>
                        Estado
                        <span class="text-danger">*</span>
                    </label>

                    <select class="select" name="status" required>
                        <option value="pending">Pendente</option>
                        <option value="approved">Aprovado</option>
                    </select>
                </div>

                <div class="m-t-20 text-center">
                    <a href="{{ route('taxes.index') }}"
                       class="btn btn-secondary submit-btn">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-primary submit-btn">
                        Criar Imposto
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
