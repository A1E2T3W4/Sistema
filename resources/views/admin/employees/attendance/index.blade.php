
@extends('layouts.main')

@section('title', 'Folha de Presenças')

@section('page-title', 'Folha de Presenças')

@section('content')

<div class="app-body">

    {{-- Filtros --}}
    <div class="card mb-3">

        <div class="card-header">
            <h5 class="card-title mb-1">
                <i class="ri-filter-3-line me-2"></i>
                Filtrar Presenças
            </h5>

            <p class="text-muted mb-0">
                Pesquise as presenças dos funcionários por mês e ano.
            </p>
        </div>

        <div class="card-body">

            <form action="#" method="GET">

                <div class="row gx-3 align-items-end">

                    {{-- Nome do Funcionário --}}
                    <div class="col-md-4 mb-3">
                        <label class="form-label">
                            Nome do Funcionário
                        </label>

                        <input
                            type="text"
                            name="employee"
                            class="form-control"
                            placeholder="Pesquisar funcionário..."
                        >
                    </div>

                    {{-- Mês --}}
                    <div class="col-md-3 mb-3">
                        <label class="form-label">
                            Seleccionar Mês
                        </label>

                        <select name="month" class="form-select">
                            <option value="">Todos os meses</option>
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                    </div>

                    {{-- Ano --}}
                    <div class="col-md-3 mb-3">
                        <label class="form-label">
                            Seleccionar Ano
                        </label>

                        <select name="year" class="form-select">
                            <option value="">Seleccionar ano</option>
                            <option value="2026" selected>2026</option>
                            <option value="2025">2025</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>

                    {{-- Botão Pesquisar --}}
                    <div class="col-md-2 mb-3">
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="ri-search-line me-1"></i>
                            Pesquisar
                        </button>
                    </div>

                </div>

            </form>

        </div>
    </div>

    {{-- Tabela de Presenças --}}
    <div class="card mb-3">

        <div class="card-header">
            <h5 class="card-title mb-1">
                <i class="ri-calendar-check-line me-2"></i>
                Registo de Presenças
            </h5>

            <p class="text-muted mb-0">
                Consulte o registo diário de presença dos funcionários.
            </p>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle text-center mb-0">

                    <thead class="table-light">
                        <tr>
                            <th class="text-start text-nowrap">
                                Funcionário
                            </th>

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

                                <td class="text-start text-nowrap fw-semibold">
                                    {{ $funcionario }}
                                </td>

                                @for ($dia = 1; $dia <= 31; $dia++)

                                    @php
                                        // Dados demonstrativos de presença
                                        $presente = ($dia % 5 !== 0 && $dia % 7 !== 0);
                                    @endphp

                                    <td>

                                        @if ($presente)
                                            <i class="ri-check-line text-success fs-5"
                                               title="Presente"></i>
                                        @else
                                            <i class="ri-close-line text-danger fs-5"
                                               title="Ausente"></i>
                                        @endif

                                    </td>

                                @endfor

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

            {{-- Legenda --}}
            <div class="d-flex flex-wrap align-items-center gap-4 mt-3">

                <div class="d-flex align-items-center gap-2">
                    <i class="ri-check-line text-success fs-5"></i>
                    <span class="text-muted">Presente</span>
                </div>

                <div class="d-flex align-items-center gap-2">
                    <i class="ri-close-line text-danger fs-5"></i>
                    <span class="text-muted">Ausente</span>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection
