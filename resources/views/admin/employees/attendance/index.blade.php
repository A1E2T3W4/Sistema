
@extends('layouts.main')

@section('title', 'Folha de Presenças')

@section('content')

<div class="content">

    {{-- Título --}}
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Folha de Presenças</h4>
        </div>
    </div>

    {{-- Filtros --}}
    <div class="row filter-row">

        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <label class="focus-label">Nome do Funcionário</label>
                <input type="text" class="form-control floating">
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus select-focus">
                <label class="focus-label">Seleccionar Mês</label>
                <select class="select floating">
                    <option value="">-</option>
                    <option>Janeiro</option>
                    <option>Fevereiro</option>
                    <option>Março</option>
                    <option>Abril</option>
                    <option>Maio</option>
                    <option>Junho</option>
                    <option>Julho</option>
                    <option>Agosto</option>
                    <option>Setembro</option>
                    <option>Outubro</option>
                    <option>Novembro</option>
                    <option>Dezembro</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus select-focus">
                <label class="focus-label">Seleccionar Ano</label>
                <select class="select floating">
                    <option value="">-</option>
                    <option>2026</option>
                    <option>2025</option>
                    <option>2024</option>
                    <option>2023</option>
                    <option>2022</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <a href="#" class="btn btn-success btn-block">
                Pesquisar
            </a>
        </div>

    </div>

    {{-- Tabela de Presenças --}}
    <div class="row">
        <div class="col-lg-12">

            <div class="table-responsive">

                <table class="table table-striped custom-table mb-0">

                    <thead>
                        <tr>
                            <th>Funcionário</th>

                            @for ($dia = 1; $dia <= 31; $dia++)
                                <th>{{ $dia }}</th>
                            @endfor
                        </tr>
                    </thead>

                    <tbody>

                        @php
                            $funcionarios = [
                                'Albina Simonis',
                                'Cristina Groves',
                                'Haylie Feeney',
                                'Mary Mericle',
                                'Zoe Butler',
                                'Marie Wells',
                                'Henry Daniels',
                                'Mark Hunter',
                                'Michael Sullivan'
                            ];
                        @endphp

                        @foreach ($funcionarios as $funcionario)
                            <tr>
                                <td>{{ $funcionario }}</td>

                                @for ($dia = 1; $dia <= 31; $dia++)

                                    @php
                                        // Dados demonstrativos de presença
                                        $presente = ($dia % 5 !== 0 && $dia % 7 !== 0);
                                    @endphp

                                    <td>
                                        @if ($presente)
                                            <i class="fa fa-check text-success"></i>
                                        @else
                                            <i class="fa fa-close text-danger"></i>
                                        @endif
                                    </td>

                                @endfor

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>
    </div>

    {{-- Legenda --}}
    <div class="mt-3">
        <span class="mr-3">
            <i class="fa fa-check text-success"></i>
            Presente
        </span>

        <span class="mr-3">
            <i class="fa fa-close text-danger"></i>
            Ausente
        </span>
    </div>

</div>

@endsection
